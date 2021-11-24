<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = ['hora', 'dia'];

    public function locales()
    {
        return $this->belongsToMany('App\Models\Local');

    }
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva');
    }

}
