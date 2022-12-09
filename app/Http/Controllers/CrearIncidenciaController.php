<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
use App\Models\Ticket;
use App\Models\Historial_ticket;

class CrearIncidenciaController extends Controller
// En esta clase se va a desarrrollar el controlador de las incidencias para el proyecto
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    // En esta funcion se llama todos los datos desde el modelo y se redirige a la pagina que corresponde
    {
        $incidencia =Incidencia::all();
        $ticket =Ticket::all();
        $h_tickets = Historial_ticket::all();
       return view("crear_incidencia.create", compact("ticket","incidencia","h_tickets"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    // En esta funcion se debe de redirigir a la pagina del create para realizar la funcion de la misma 
    {
        return view('crear_incidencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // En esta funcion se guarda los datos
    {
        $ticket = new Ticket();
        $ticket ->descripcion= $request-> get('descripcion');
        $ticket ->prioridad= $request-> get('prioridad');
        $ticket ->id_incidencia=$request-> get('id_incidencia');
        $ticket ->id_estado=$request-> get('id_estado');
        
        $ticket->save();
        return redirect('/crear_incidencia');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function automatico(Request $request){

        $ticket =  new Ticket();
        $ticket ->id = $request-> get('id');
        $ejecutar1 ="INSERT INTO historial_ticket(id_ticket)  VALUES ('id')";
    } 



}
