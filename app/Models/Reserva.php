<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = ['local_id', 'materia_id', 'docente_id', 'horario_id', 'aprobado'];

    public function materia()
    {
        return $this->belongsTo('App\Models\Materia', 'materia_id');

    }

    public function horario()
    {
        return $this->belongsTo('App\Models\Horario', 'horario_id');
        
    }

    public function docente()
    {
        return $this->belongsTo('App\Models\Docente', 'docente_id');
        
    }

    public function local()
    {
        return $this->belongsTo('App\Models\Locale', 'local_id');

    }
}
