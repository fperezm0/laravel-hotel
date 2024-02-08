<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\MunicipiosController; 
use App\Http\Controllers\Fotos_de_habitacionController;
use App\Http\Controllers\GraficasController; 
use App\Http\Controllers\PdfController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Users;
use App\Models\Tipos_de_usuario;




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


Route::group(['middleware' => 'web'], function() {
  

Route::get('/', function () {
        return view('welcome');
    });

Route::get('login', function () {
        return view('login');
    });

Route::get('register', function () {
        return view('register');
    });
Route::resource('paises', PaisesController::class);


Route::resource('estados', EstadosController::class);
Route::resource('Municipios',MunicipiosController::class);
Route::resource('Tipo_de_habitacion', Tipo_de_habitacionController::class);
Route::resource('fotos_de_habitacion', Fotos_de_habitacionController::class);
Route::get('subir_foto', [Fotos_de_habitacionController::class,'subir_foto']);
Route::post('subir_foto', [Fotos_de_habitacionController::class,'guardar_foto']);


Route::get('grafica_3d', [GraficasController::class,'graficaHabitaciones']);
Route::get('grafica_3d2', [GraficasController::class,'graficaServicio']);

Route::get('genera_pdf', [PdfController::class,'genera_pdf']);
Route::get('crear_reporte_nombre/{tipo}', [PdfController::class,'crear_reporte_nombre']);
Route::get('crear_reporte_id/{tipo}', [PdfController::class,'crear_reporte_id']);
   

Route::get('reportereservacion/{tipo}', [PdfController::class,'crear_reporte_reservacion']);

Route::get('form_mail', [CorreoController::class,'create']);
Route::post('enviar_correo', [CorreoController::class,'enviar']);





Route::resource('paises', PaisesController::class);


Route::resource('estados', EstadosController::class);



Route::resource('Municipios',MunicipiosController::class);
Route::resource('Tipo_de_habitacion', Tipo_de_habitacionController::class);
Route::resource('fotos_de_habitacion', Fotos_de_habitacionController::class);
Route::get('subir_foto', [Fotos_de_habitacionController::class,'subir_foto']);
Route::post('subir_foto', [Fotos_de_habitacionController::class,'guardar_foto']);

 Route::get('login1', [LoginController::class,'getLogin']);

    Route::post('login1', [LoginController::class,'postLogin']);

    Route::get('register1', [LoginController::class,'getRegister']);

    Route::post('register1', [LoginController::class.'postRegister']);





    });





Route::group(['middleware' => 'auth'], function() {
   Route::get('sin_acceso', function(){
  //$usuarioactual=\Auth::user();
    $usuarioactual = Users::get('usuarioactual');
    return view("mensajes.error_acceso")
        ->with('msj','Privilegios insuficientes para acceder a
        esta sección. Es necesario iniciar sesión como
        ADMINISTRADOR para tener acceso a esta sección.')
        ->with("usuario",$usuarioactual);
    });

    Route::get('sin_acceso2', function(){

    //$usuarioactual=\Auth::user();
    $usuarioactual = Users::get('usuarioactual');
    return view("mensajes.error_acceso")
        ->with('msj','Privilegios insuficientes para acceder a
        esta sección. Es necesario iniciar sesión como
        usuario SUPERVISOR para tener acceso a esta sección.')
        ->with("usuario",$usuarioactual);
    });

    Route::get('sin_acceso3', function(){

    //$usuarioactual=\Auth::user();
    $usuarioactual = Users::get('usuarioactual');
    return view("mensajes.error_acceso")
        ->with('msj','Privilegios insuficientes para acceder a
        esta sección.<br /> Es necesario iniciar sesión como
        usuario cliente para tener acceso a esta sección.')
        ->with("usuario",$usuarioactual);
    });

 



});



Route::group(['middleware' => 'usuarioadmin'], function() {


});


Route::group(['middleware' => 'usuariosupervisor'], function() {


});


Route::group(['middleware' => 'usuarioregistrado'], function() {


});












Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
