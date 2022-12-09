<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Historial_ticket;

class Historial_ticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets =Ticket::all();
        $h_tickets =Historial_ticket::all();
        $accion =Accion::all();
        return view("historial_ticket.index", compact("tickets","h_tickets","accion"))->with("h_tickets",$h_tickets);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historial_ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $h_tickets = new Historial_ticket();
        $h_tickets ->id_ticket=$request-> get('id_ticket');
        $h_tickets ->observaciones= $request-> get('observaciones');
        $h_tickets ->id_accion=$request-> get('id_accion');
        $h_tickets ->created_at= $request-> get('created_at');
        $h_tickets ->updated_at= $request-> get('updated_at');


        $h_tickets->save();
        return redirect('/historial_ticket');
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
        $h_tickets =Historial_ticket::find($id);
        return view('historial_ticket.edit')->with("h_tickets",$h_tickets);
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
        $h_tickets =Historial_ticket::find($id);

        $h_tickets ->observaciones= $request-> get('observaciones');
        $h_tickets ->id_accion=$request-> get('id_accion');


        $h_tickets->save();
        return redirect('/historial_ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $h_tickets =Historial_ticket::find($id);
        $h_tickets ->delete();
        return redirect('/historial_ticket');
    }
}
