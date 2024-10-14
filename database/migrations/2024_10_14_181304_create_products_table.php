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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id bigint primary key generated automatically
            $table->string('name'); // name text not null
            $table->longText('description')->nullable(); // description text, allows null values
            $table->decimal('price', 10, 2); // price numeric(10, 2) not null
            $table->integer('stock'); // stock int not null
            $table->timestamps(); // created_at and updated_at with timezone
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
