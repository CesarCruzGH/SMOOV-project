<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id(); // id bigint primary key generated automatically
            $table->foreignId('order_id')->constrained('orders'); // order_id bigint references orders(id)
            $table->foreignId('product_id')->constrained('products'); // product_id bigint references products(id)
            $table->integer('quantity'); // quantity int not null
            $table->decimal('price', 10, 2); // price numeric(10, 2) not null
            $table->timestamps(); // created_at and updated_at with timezone
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
