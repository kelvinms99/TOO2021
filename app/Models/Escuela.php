<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use HasFactory;

    protected $fillable = ["nombre"];

    public function materias()
    {
        return $this->hasMany('App\Models\Materia');
    }
    public function edificios()
    {
        return $this->belongsToMany('App\Models\Edificio');
    }
}
