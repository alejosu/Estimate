<?php

namespace softmas;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
  public $table = "cotizaciones";
  
  public function cliente()
  {
    return $this->belongsTo(Cliente::class);
  }

  public function usuario()
  {
    return $this->belongsTo(Usuario::class);
  }
}
