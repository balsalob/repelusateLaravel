<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tablonpelusi extends Model
{
    protected $table = "tablonpelusis";

    protected $fillable = ['nombre', 'foto'];
}
