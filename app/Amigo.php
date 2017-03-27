<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amigo extends Model
{
    protected $table = "amigos";

    protected $fillable = ['nombre', 'foto', 'texto'];

    public function redsocialamigos()
    {
      return $this->hasMany('App\Redsocialamigo');
    }
}
