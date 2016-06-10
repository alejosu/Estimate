<?php

namespace softmas;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{

  public function cliente()
  {
    return $this->belongsTo(Cliente::class);
  }

  public function usuario()
  {
    return $this->belongsTo(Usuario::class);
  }
}
