<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Incidencia;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets =Ticket::all();
        $incidencia =Incidencia::all();
        $estado =Estado::all();
        return view("ticket.index", compact("tickets","incidencia","estado"))->with("ticket",$tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new Ticket();
        $ticket ->id_incidencia=$request-> get('id_incidencia');
        $ticket ->descripcion= $request-> get('descripcion');
        $ticket ->id_estado=$request-> get('id_estado');
        $ticket ->prioridad= $request-> get('prioridad');


        $ticket->save();
        return redirect('/ticket');
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
        $ticket =Ticket::find($id);
        return view('ticket.edit')->with('ticket',$ticket);
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
        $ticket =Ticket::find($id);

        $ticket ->descripcion= $request-> get('descripcion');
        $ticket ->id_estado=$request-> get('id_estado');
        $ticket ->prioridad= $request-> get('prioridad');


        $ticket->save();
        return redirect('/ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket =Ticket::find($id);
        $ticket ->delete();
        return redirect('/ticket');
    }
}
