<?php

namespace softmas;

use Illuminate\Database\Eloquent\Model;

use softmas\Empresa;

class Usuario extends Model
{
    public function empresa()
    {
      return this->belongsTo(Empresa::class);
    }
}
