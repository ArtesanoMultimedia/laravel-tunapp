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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->date('fecha')->nullable();
            $table->string('lugar')->nullable();
            $table->double('latitud')->nullable();
            $table->double('longitud')->nullable();
            $table->double('km')->nullable();
            $table->double('tiempo')->nullable();
            $table->double('gastos')->nullable();
            $table->double('precio')->nullable();
            $table->double('propina')->nullable();
            $table->double('venta')->nullable();
            $table->string('estado')->nullable();
            $table->string('tipo')->nullable();
            $table->string('observaciones')->nullable();
            $table->integer('cantidad_tunos_contratados')->nullable();
            $table->integer('cantidad_tunos_asistentes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
