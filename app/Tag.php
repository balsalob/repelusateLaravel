<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $table = "tags";

  protected $fillable = ['nombre'];

  public function pelusis()
  {
    return $this->belongsToMany('App\Pelusi');
  }

  public function piezas()
  {
    return $this->belongsToMany('App\Pieza');
  }
}
