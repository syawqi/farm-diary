<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farms extends Model
{
  protected $table = 'farms';

  public function farmplan(){
    return $this->hasMany('App\Models\Farmplan');
  }
  public function farmrealization(){
    return $this->hasMany('App\Models\Farmrealization');

  }
}
