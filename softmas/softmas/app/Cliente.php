<?php

namespace softmas;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  public function cotizacion()
  {
    return $this->hasMany(Cotizacion::class);
  }
}
