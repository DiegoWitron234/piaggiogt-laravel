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
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo', 100);
            $table->unsignedInteger('anio');
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->string('imagen')->nullable();  // Para almacenar la ruta de la imagen
            $table->string('motor', 50);
            $table->string('velocidad', 50);
            $table->string('manual', 50);
            $table->string('pasajeros', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
