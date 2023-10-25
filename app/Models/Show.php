<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

/*
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
 */
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'lugar',
        'latitud',
        'longitud',
        'km',
        'tiempo',
        'gastos',
        'precio',
        'propina',
        'venta',
        'estado',
        'tipo',
        'observaciones',
        'cantidad_tunos_contratados',
        'cantidad_tunos_asistentes',
    ];
}
