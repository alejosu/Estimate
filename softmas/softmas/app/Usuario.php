<?php

namespace softmas;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function empresa()
    {
      return $this->belongsTo(Empresa::class);
    }

    public function cotizacion()
    {
      return $this->hasMany(Cotizacion::class);
    }
}
