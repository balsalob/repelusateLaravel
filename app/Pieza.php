<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
  protected $table = "piezas";

  protected $fillable = ['nombre', 'texto', 'foto', 'url'];

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }
}
