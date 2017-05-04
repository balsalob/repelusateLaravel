<?php

namespace App\Http\Controllers;

use App\Pieza;
use Illuminate\Http\Request;

class PiezaController extends Controller
{
    public function index()
    {
      $piezas = Pieza::get();
      return view('pieza.piezas')->with('piezas', $piezas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pieza.piezacreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $pieza = new Pieza($request -> all());
      $pieza -> save();
      return redirect('/piezas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pieza $pieza
     * @return \Illuminate\Http\Response
     */
    public function show(Pieza $pieza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pieza $pieza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pieza $pieza)
    {
        return view('pieza.piezaedit')->with('pieza', $pieza);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pieza $pieza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pieza $pieza)
    {
      $pieza->update($request->all());
      return redirect('/piezas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pieza $pieza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pieza $pieza)
    {
      $pieza -> delete();
      return redirect('/piezas');
    }
  }
