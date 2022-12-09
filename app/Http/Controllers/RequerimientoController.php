<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requerimiento;

class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requerimientos = Requerimiento::all();
        return view('requerimiento.index')->with('requerimientos', $requerimientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requerimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requerimientos = new Requerimiento();
        $requerimientos -> name = $request-> get ('name');
        $requerimientos -> tipo_requerimiento = $request-> get ('tipo_requerimiento');
        $requerimientos->save();

        return redirect('/requerimientos');
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
        $requerimiento = Requerimiento::find($id);
        return view('requerimiento.edit')->with('requerimiento',$requerimiento);
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
        $requerimiento = Requerimiento::find($id);
        
        $requerimiento -> name = $request-> get ('name');
        $requerimiento -> tipo_requerimiento = $request-> get ('tipo_requerimiento');

        $requerimiento->save();
        return redirect('/requerimientos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requerimiento = Requerimiento::find($id);
        $requerimiento ->delete();
        return redirect('/requerimientos');
    }
}
