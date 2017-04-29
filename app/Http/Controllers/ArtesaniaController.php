<?php

namespace App\Http\Controllers;

use App\Artesania;
use Illuminate\Http\Request;

class ArtesaniaController extends Controller
{
  public function index()
  {
    $artesanias = Artesania::get();
    return view('artesania.artesania')->with('artesanias', $artesanias);
  }

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
    return redirect('/artesania');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Pelusi  $pelusi
   * @return \Illuminate\Http\Response
   */
  public function show(Artesania $artesania)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Pelusi  $pelusi
   * @return \Illuminate\Http\Response
   */
  public function edit(Artesania $artesania)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Pelusi  $pelusi
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Artesania $artesania)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Pelusi  $pelusi
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $artesania = Artesania::find($id);
    $artesania -> delete();
    return redirect('/artesania');
  }
}
