<?php

namespace App\Http\Controllers;

use App\Amigo;
use Illuminate\Http\Request;

class AmigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amigos = Amigo::get();
        return view('amigo.amigos')->with('amigos', $amigos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('amigo.amigocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $amigo = new Amigo($request -> all());
      $amigo -> save();
      return redirect('/amigos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Amigo  $amigo
     * @return \Illuminate\Http\Response
     */
    public function show(Amigo $amigo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Amigo  $amigo
     * @return \Illuminate\Http\Response
     */
    public function edit(Amigo $amigo)
    {
        return view('amigo.amigoedit')->with('amigo', $amigo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Amigo  $amigo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amigo $amigo)
    {
      $amigo->update($request->all());
      return redirect('/amigos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Amigo  $amigo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amigo $amigo)
    {
      $amigo -> delete();
      return redirect('/amigos');
    }
}
