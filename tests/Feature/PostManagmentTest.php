<?php

namespace Tests\Feature;

use App\Models\Equipo;
use App\Models\Estado;
use App\Models\Incidencia;
use App\Models\Requerimiento;
use App\Models\Rol;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostManagmentTest extends TestCase
{

/** @test */
public function test_equipo_can_be_created ()
{

    $this -> withoutExceptionHandling();
    $response = $this-> get('/equipos' , [
       'codigo' => 'sp1' ,
       'nombre' => 'test',
       'estado'=> 'test estado',
       'cantidad'=> '10'
      
    ]);

    $response -> assertOk();
    $this ->assertCount(5, Equipo::all());
    $equipo =Equipo::first();
    $this ->assertEquals($equipo->codigo, 'sp1');
    $this ->assertEquals($equipo->nombre, 'test');
    $this ->assertEquals($equipo->estado, 'estado');
    $this ->assertEquals($equipo->cantidad, '10');
}

/** @test */
public function List_equipo_test()
{
    $this -> withoutExceptionHandling();
    $response = $this->get('/equipos');
    $response -> assertOk();
    $equipo =Equipo::all();

    $response-> assertViewIs('equipos.index');
    $response-> assertViewHas('equipos', $equipo);

}

/** @test */
public function Update_equipo_test()
{
    
    $this -> withoutExceptionHandling();
    $response = $this-> put('/equipos/'.$equipo-> id, [
       'codigo' => 'sp1' ,
       'nombre' => 'test',
       'estado'=> 'test estado',
       'cantidad'=> '10'
      
    ]);
    
    $this ->assertCount(1, Equipo::all());
    $equipo = $equipo ->  fresh();
    $this ->assertEquals($equipo->codigo, 'sp1');
    $this ->assertEquals($equipo->nombre, 'test');
    $this ->assertEquals($equipo->estado, 'estado');
    $this ->assertEquals($equipo->cantidad, '10');
    $response -> assertRedirect('/equipos/'. $equipo->id);

}

/** @test */
public function Delete_equipo_test()
{  
    $this -> withoutExceptionHandling();   
    $response = $this-> delete('/equipos/'.$equipo-> id);
    $this ->assertCount(0, Equipo::all());
    $response -> assertRedirect('/equipos');
}

// ROLES .........................................................................

public function test_roles_can_be_created ()
{

    $this -> withoutExceptionHandling();
    $response = $this-> get('/roles' , [
       'tipo_rol' => 'Test' 
    ]);

    $response -> assertOk();
    $this ->assertCount(1, Rol::all());
    $rol =Rol::first();
    $this ->assertEquals($rol->rol, 'Test');
}

/** @test */
public function List_roles_test()
{
    $this -> withoutExceptionHandling();
    $response = $this->get('/roles');
    $response -> assertOk();
    $rol =Rol::all();

    $response-> assertViewIs('roles.index');
    $response-> assertViewHas('roles', $rol);

}

/** @test */
public function Update_rol_test()
{
    
    $this -> withoutExceptionHandling();
    $response = $this-> put('/equipos/'.$equipo-> id, [
       'tipo_rol' => 'Test' 
      
    ]);
    
    $this ->assertCount(1, Rol::all());
    $rol = $rol ->  fresh();
    $this ->assertEquals($rol->rol, 'Test');
    $response -> assertRedirect('/roles/'. $rol->id);

}

/** @test */
public function Delete_rol_test()
{  
    $this -> withoutExceptionHandling();   
    $response = $this-> delete('/roles/'.$rol-> id);
    $this ->assertCount(0, Rol::all());
    $response -> assertRedirect('/roles');
}


//INCIDENCIAS ...............................................................................................

public function test_Incidencia_can_be_created ()
{

    $this -> withoutExceptionHandling();
    $response = $this-> get('/incidencias' , [
       'tipo_incidencia' => 'Test tipo' 
    ]);

    $response -> assertOk();
    $this ->assertCount(1, Incidencia::all());
    $incidencia =Incidencia::first();
    $this ->assertEquals($incidencia-> incidencia, 'Test tipo');
}

/** @test */
public function List_incidencia_test()
{
    $this -> withoutExceptionHandling();
    $response = $this->get('/incidencias');
    $response -> assertOk();
    $incidencia =Incidencia::all();

    $response-> assertViewIs('incidecnias.index');
    $response-> assertViewHas('incidencias', $incidencia);

}

/** @test */
public function Update_incidencia_test()
{
    
    $this -> withoutExceptionHandling();
    $response = $this-> put('/incidencias/'.$incidencia-> id, [
       'tipo_incidencia' => 'Test tipo' 
      
    ]);
    
    $this ->assertCount(1, Incidencia::all());
    $incidecnia = $incidencia ->  fresh();
    $this ->assertEquals($incidecnia->incidencia, 'Test tipo' );
    $response -> assertRedirect('/incidencias/'. $incidencia->id);

}

/** @test */
public function Delete_incidencia_test()
{  
    $this -> withoutExceptionHandling();   
    $response = $this-> delete('/incidecnias/'.$incidencia-> id);
    $this ->assertCount(0, Incidencia::all());
    $response -> assertRedirect('/incidencias');
}






//REQUERIMIENTOS.............................................................................................

public function test_requerimientos_can_be_created ()
{

    $this -> withoutExceptionHandling();
    $response = $this-> get('/requerimientos' , [
       'tipo_requerimiento' => 'Test tipo' 
    ]);

    $response -> assertOk();
    $this ->assertCount(1, Requerimiento::all());
    $requerimiento =Requerimiento::first();
    $this ->assertEquals($requerimiento-> requerimeinto, 'Test tipo');
}

/** @test */
public function List_requerimiento_test()
{
    $this -> withoutExceptionHandling();
    $response = $this->get('/requerimientos');
    $response -> assertOk();
    $requerimiento =Requerimiento::all();

    $response-> assertViewIs('requermientos.index');
    $response-> assertViewHas('requermientos', $requermientos);

}

/** @test */
public function Update_requermientos_test()
{
    
    $this -> withoutExceptionHandling();
    $response = $this-> put('/requermientos/'.$requermiento-> id, [
       'tipo_requerimiento' => 'Test tipo' 
      
    ]);
    
    $this ->assertCount(1, Requerimiento::all());
    $requerimiento = $requerimiento ->  fresh();
    $this ->assertEquals($requerimiento->requerimiento, 'Test tipo' );
    $response -> assertRedirect('/requermientos/'. $requerimiento->id);

}

/** @test */
public function Delete_requermiento_test()
{  
    $this -> withoutExceptionHandling();   
    $response = $this-> delete('/requermientos/'.$requermiento-> id);
    $this ->assertCount(0, Requerimiento::all());
    $response -> assertRedirect('/requermientos');
}



//SELECCIONAR ESTADO.........................................................................................
/** @test */
public function List_estado_test()
{
    $this -> withoutExceptionHandling();
    $response = $this->get('/estados');
    $response -> assertOk();
    $estado =Estado::all();

    $response-> assertViewIs('estado.index');
    $response-> assertViewHas('estado', $estado);

}


}
