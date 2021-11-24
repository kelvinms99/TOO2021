<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = ["escuela_id", "prerrequisito_id", "codigo_materia", "nombre", "unidades_valorativas", "num_ciclo", "docente_id"];
    
    public function materia()
    {
        return $this->hasOne('App\Models\Materia');
    }
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva');
    }
    public function prerrequisito()
    {
        return $this->belongsTo('App\Models\Materia');
    }
    public function escuela()
    {
        return $this->belongsTo('App\Models\Escuela');
    }
    public function coordinador(){
        return $this->belongsTo('App\Models\Docente', 'docente_id');
    }
}
