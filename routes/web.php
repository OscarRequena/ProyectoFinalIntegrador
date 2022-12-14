<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('articulos','App\Http\Controllers\ArticuloController');
Route::resource('usuarios','App\Http\Controllers\UsuarioController');
Route::resource('equipos','App\Http\Controllers\EquipoController');
Route::resource('crear_incidencia','App\Http\Controllers\CrearIncidenciaController');
Route::resource('ticket','App\Http\Controllers\TicketController');
Route::resource('historial_ticket','App\Http\Controllers\Historial_ticketController');

Route::resource('incidencias','App\Http\Controllers\IncidenciaController');
Route::resource('requerimientos','App\Http\Controllers\RequerimientoController');

Route::resource('roles','App\Http\Controllers\RolController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
