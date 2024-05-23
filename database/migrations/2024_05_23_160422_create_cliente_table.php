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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('numero_documento', 15)->unique();
            $table->string('nombre', 50)->nullable();
            $table->string('apellido', 50)->nullable();
            $table->string('direccion', 80)->nullable();
            $table->date('cumpleaños')->nullable();
            $table->string('celular', 16)->nullable();
            $table->string('correo', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
