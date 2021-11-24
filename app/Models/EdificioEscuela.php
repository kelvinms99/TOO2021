<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdificioEscuela extends Model
{
    use HasFactory;

    protected $table = 'edificio_escuela';
    protected $fillable = ['edificio_id', 'escuela_id'];
}
