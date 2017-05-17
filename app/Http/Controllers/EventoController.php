<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => ['index']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::get();
        return view('evento.eventos')->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evento.eventoscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $evento = new Evento($request -> all());
      $file = $request->file('foto');
      $nombre = $file->getClientOriginalName();
      \Storage::disk('eventos')->put($nombre,  \File::get($file));
      $evento->foto = $nombre;
      $evento -> save();
      return redirect('/eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('evento.eventoedit')->with('evento', $evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
      if(!empty($request->file('foto'))){
        \Storage::disk('eventos')->delete($evento->foto);
        $file = $request->file('foto');
        $nombre = $file->getClientOriginalName();
        \Storage::disk('eventos')->put($nombre,  \File::get($file));
        $evento->update($request->all());
        $evento->update(['foto' => $nombre]);
      }else{
        $evento->update($request->all());
      }

      return redirect('/eventos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
      \Storage::disk('eventos')->delete($evento->foto);
      $evento -> delete();
      return redirect('/eventos');
    }
}
