<?php

namespace App\Model;

use App\Model\Type;
use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function type()
  {
    return $this->belongsTo(Type::class);
  }

}
