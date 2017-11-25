<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmrealization extends Model
{
  protected $table = 'farms-realization';

  public function farmrealizationdetail(){
    return $this->hasMany('App\Models\Farmrealizationdetail');
  }
  public function farmharvest(){
    return $this->hasMany('App\Models\Farmharvest');
  }
}
