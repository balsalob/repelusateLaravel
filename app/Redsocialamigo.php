<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redsocialamigo extends Model
{
    protected $table = "redsocialamigos";

    protected $fillable = ['nombre', 'direccion'];

    public function amigos()
    {
      return $this->belongsTo('App\Amigo');
    }
}
