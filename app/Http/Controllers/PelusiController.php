<?php

namespace App\Http\Controllers;

use App\Pelusi;
use Illuminate\Http\Request;

class PelusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pelusis = Pelusi::get();
      return view('pelusi.pelusis')->with('pelusis', $pelusis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelusi.pelusicreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelusi = new Pelusi($request -> all());
        $pelusi -> save();
        return redirect('/pelusis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelusi  $pelusi
     * @return \Illuminate\Http\Response
     */
    public function show(Pelusi $pelusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelusi  $pelusi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelusi = Pelusi::find($id);
        //dd($pelusi);
        return view('pelusi.pelusiedit')->with('pelusi', $pelusi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelusi  $pelusi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelusi $pelusi)
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
        $pelusi = Pelusi::find($id);
        $pelusi -> delete();
        return redirect('/pelusis');
    }
}
