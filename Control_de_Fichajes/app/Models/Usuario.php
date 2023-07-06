<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Registro;

class Usuario extends Model
{
    public function registros()
    {
        return $this->hasMany(Registro::class);
    }

}
