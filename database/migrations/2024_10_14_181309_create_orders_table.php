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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // id bigint primary key autoincremental
            $table->foreignId('user_id')->constrained('users'); // Clave foránea user_id (relación con users) 
            $table->string('status'); // Columna para el estado del pedido
            $table->decimal('total_price', 10, 2); // Precio total del pedido
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
