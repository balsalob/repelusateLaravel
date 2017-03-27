<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelusi extends Model
{
    protected $table = "pelusis";

    protected $fillable = ['nombre', 'historia', 'foto', 'creepy'];
}
