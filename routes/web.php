<?php

use Illuminate\Support\Facades\Route;
use App\Models\Edificio;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/permiso-denegado', function(){
    return view('admin.alerta');
})->middleware('auth');

Route::middleware('admin')->group(function(){
    Route::resource('materias', App\Http\Controllers\MateriaController::class);
    Route::resource('docentes', App\Http\Controllers\DocenteController::class);
    Route::resource('escuela', App\Http\Controllers\EscuelaController::class);
    Route::resource('locales', App\Http\Controllers\LocalController::class);
    Route::resource('horarios', App\Http\Controllers\HorarioController::class);
    Route::resource('escuela/{escuela}/edificios', App\Http\Controllers\EdificioController::class);
    Route::post('escuela/{escuela}/edificios/{edificio}/establecer', 'App\Http\Controllers\EdificioController@establecerEdificio')->name('edificios.establecer');
    Route::post('escuela/{escuela}/edificios/{edificio}/quitar', 'App\Http\Controllers\EdificioController@quitarEdificio')->name('edificios.quitar');   
    Route::get('/reportes', [App\Http\Controllers\ReportesController::class, 'index'])->name('reportes');
    Route::post('reportes-pdf', [App\Http\Controllers\ReportesController::class, 'descargarPDF'])->name('reportes.pdf');
    Route::get('/menureserva', [App\Http\Controllers\ReservasController::class, 'index'])->name('menureserva');
    Route::post('/horarios/local/', [App\Http\Controllers\ReservasController::class, 'horarios'])->name('horarios/local');
    Route::resource('locales/{local}/images', App\Http\Controllers\ImageController::class);
    Route::get('/listado', [App\Http\Controllers\ReservasController::class, 'listadoSolicitudes'])->name('listadoSolicitudes');
    Route::post('/aprobar/{reserva}', [App\Http\Controllers\ReservasController::class, 'cambiarEstado'])->name('aprobar');
    Route::post('/reservar/local/', [App\Http\Controllers\LocalController::class, 'reservar'])->name('reservar');
    Route::get('/buscarlocal', [App\Http\Controllers\LocalController::class, 'buscar'])->name('buscarlocal');
    Route::get('/buscarlocal/edificio', [App\Http\Controllers\LocalController::class, 'buscarPorEdificio'])->name('buscarLocal.edificio');
    
}); 

Route::middleware('docente')->group(function(){
    Route::get('/menureserva', [App\Http\Controllers\ReservasController::class, 'index'])->name('menureserva');
    Route::post('/horarios/local/', [App\Http\Controllers\ReservasController::class, 'horarios'])->name('horarios/local');
    Route::post('/solicitudes', [App\Http\Controllers\ReservasController::class, 'solicitudesIndex'])->name('solicitudes');
    Route::get('/buscarlocal', [App\Http\Controllers\LocalController::class, 'buscar'])->name('buscarlocal');
    Route::get('/buscarlocal/edificio', [App\Http\Controllers\LocalController::class, 'buscarPorEdificio'])->name('buscarLocal.edificio');
    Route::post('/reservar/local/', [App\Http\Controllers\LocalController::class, 'reservar'])->name('reservarlocal');
});

