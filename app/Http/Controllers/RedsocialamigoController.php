<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amigo;
use App\Redsocialamigo;

class RedsocialamigoController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => ['index']]);
  }

  public function index(Amigo $amigo)
  {
      $redessociales = Redsocialamigo::where('amigo_id', $amigo->id)->get();

      //return dd($redessociales);
      return view('redsocial.redsocial')->with('redessociales', $redessociales);
  }

  public function create(Amigo $amigo)
  {
      return view('redsocial.redsocialcreate')->with('amigo', $amigo);
  }

  public function store(Request $request)
  {
    $redsocial = new Redsocialamigo($request -> all());
    $redsocial->amigo_id = $request ->amigo_id;
    $redsocial -> save();
    return redirect('/amigos');
  }

  public function edit(Redsocialamigo $redsocial)
  {
      return view('redsocial.redsocialedit')->with('redsocial', $redsocial);
  }

  public function update(Request $request, Redsocialamigo $redsocial)
  {
    $redsocial->update($request->all());
    return redirect('/amigos');
  }

  public function destroy(Redsocialamigo $redsocial)
  {
    $redsocial -> delete();
    return redirect('/amigos');
  }

}
