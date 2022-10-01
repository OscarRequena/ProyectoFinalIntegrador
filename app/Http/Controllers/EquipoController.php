<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos =Equipo::all();
        return view('equipo.index')->with('equipos',$equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipos = new Equipo();
        $equipos ->codigo = $request-> get('codigo');
        $equipos ->nombre= $request-> get('nombre');
        $equipos ->estado=$request-> get('estado');
        $equipos ->cantidad= $request-> get('cantidad');


        $equipos->save();

        return redirect('/equipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo =Equipo::find($id);
        return view('equipo.edit')->with('equipo',$equipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipo =Equipo::find($id);
      
        $equipo ->codigo = $request-> get('codigo');
        $equipo ->nombre= $request-> get('nombre');
        $equipo ->estado=$request-> get('estado');
        $equipo ->cantidad= $request-> get('cantidad');


        $equipo->save();

        return redirect('/equipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo =Equipo::find($id);
        $equipo  ->delete();
        return redirect('/equipos');
    }
}
