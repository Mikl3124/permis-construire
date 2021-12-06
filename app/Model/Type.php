<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  public function projets()
    {
        return $this->hasMany(Projet::class);
    }
}
