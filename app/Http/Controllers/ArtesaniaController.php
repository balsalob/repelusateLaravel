<?php

namespace App\Http\Controllers;

use App\Artesania;
use Illuminate\Http\Request;

class ArtesaniaController extends Controller
{
  public function index()
  {
    $artesanias = Artesania::get();
    return view('artesania')->with('artesanias', $artesanias);
  }
}
