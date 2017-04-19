<?php

namespace App\Http\Controllers;

use App\Pieza;
use Illuminate\Http\Request;

class PiezaController extends Controller
{
    public function index()
    {
      $piezas = Pieza::get();
      return view('piezas')->with('piezas', $piezas);
    }
}
