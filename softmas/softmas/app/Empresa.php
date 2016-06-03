<?php

namespace softmas;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function usuarios()
    {
      return $this->hasMany(Usuario::class);
    }
}
