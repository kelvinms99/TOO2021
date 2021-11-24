<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ubicacion'];

    public function escuelas()
    {
        return $this->belongsToMany('App\Models\Escuela');
    }
    public function locales()
    {
        return $this->hasMany('App\Models\Locale');
    }
}
