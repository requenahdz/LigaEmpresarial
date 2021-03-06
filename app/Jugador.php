<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $fillable = ['nombre','apaterno','amaterno','dorsal','fechaNacimiento','activo'];
    protected $table = 'jugadores';

    
    public function getFullNameAttribute()
    {
        return "{$this->nombre} {$this->apaterno} {$this->amaterno}";
    }
    
    public function scopeActivo($query)
    {
        return $query->where('activo',1);
    }
}
