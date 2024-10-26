<?php

namespace App\Models;

use CodeIgniter\Model;

class EjercicioModel extends Model
{
    protected $table = 'ejercicios';
    protected $primaryKey = 'id_ejercicio';

    protected $allowedFields = [
        'descripcion',
        'tema',
        'id_profesor',
        'ejercicio', // Columna para almacenar el archivo PDF
    ];

    protected $returnType = 'array';
    protected $useTimestamps = true; // Si tienes las columnas created_at y updated_at
}
