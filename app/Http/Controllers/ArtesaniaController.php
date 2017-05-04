<?php

namespace App\Http\Controllers;

use App\Artesania;
use Illuminate\Http\Request;

class ArtesaniaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $artesanias = Artesania::get();
    return view('artesania.artesania')->with('artesanias', $artesanias);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function create()
  {
      return view('artesania.artesaniacreate');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $artesania = new Artesania($request -> all());
    $artesania -> save();
    return redirect('/artesanias');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Artesania $artesania
   * @return \Illuminate\Http\Response
   */
  public function show(Artesania $artesania)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Artesania $artesania
   * @return \Illuminate\Http\Response
   */
  public function edit(Artesania $artesania)
  {
      return view('artesania.artesaniaedit')->with('artesania', $artesania);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Artesania $artesania
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Artesania $artesania)
  {
    $artesania->update($request->all());
    return redirect('/artesanias');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Artesania $artesania
   * @return \Illuminate\Http\Response
   */
  public function destroy(Artesania $artesania)
  {
    $artesania -> delete();
    return redirect('/artesanias');
  }
}
