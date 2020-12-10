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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    

/** Bloque dani */

Route::resource('tipousuarios',TipoUsuarioController::class);

Route::resource('rols', App\Http\Controllers\RolController::class);

Route::resource('generos', App\Http\Controllers\GeneroController::class);

Route::resource('cargos', App\Http\Controllers\CargoController::class);

Route::resource('localidades', App\Http\Controllers\LocalidadController::class);

Route::resource('parentescos', App\Http\Controllers\ParentescoController::class);

Route::resource('medicos', App\Http\Controllers\MedicoController::class);

Route::get('reportecertificados/{idusuario?}', [App\Http\Controllers\UserController::class,'reportecertificados']);
Route::get('reportemedico/{idmedico?}', [App\Http\Controllers\UserController::class,'reportexmedicoblade'])->name('cortito');
Route::get('reporteausentismo', [App\Http\Controllers\UserController::class,'reporteausentismo'])->name('ausentismo');



//bloque dani fin
//  bloque javier inicio */

Route::get('/', function () {
    return view('auth.login');  
});

Route::get('/certificados/ingresarCertificadoMed', function () {
    return view('certificados.create_medicina');  
});

Route::get('/certificados/ingresarCertificado', [App\Http\Controllers\CertificadoController::class,'ingresarCertificadoCheck']);


Route::get('/certificados/cambiarEstadoJustificado/{id}', [App\Http\Controllers\CertificadoController::class,'updateEstadoJustificado'])->name('certificados.cambiarEstadoJustificado');


Route::get('/certificados/cambiarEstadoInjustificado/{id}', [App\Http\Controllers\CertificadoController::class,'updateEstadoInjustificado'])->name('certificados.cambiarEstadoInjustificado');



Route::get('/users/agregarUsuario', [App\Http\Controllers\UserController::class,'ingresarUsuario']);


Route::get('/usuario', [App\Http\Controllers\UserController::class,'getUsuario']);


Route::get('/certificados/mostrar_certificados_personal', 'App\Http\Controllers\CertificadoController@mostrarCertificadosPersonal')->name('mostrar_certificados_personal');

Route::get('/certificados/mostrar_certificados','App\Http\Controllers\CertificadoController@mostrarCertificados');

Route::get('/certificados/mostrar_certificados_justificados','App\Http\Controllers\CertificadoController@mostrarCertificadosJustificados');

Route::get('/certificados/mostrar_certificados_pendientes','App\Http\Controllers\CertificadoController@mostrarCertificadosPendientes');

Route::get('/certificados/mostrar_certificados_vencidos','App\Http\Controllers\CertificadoController@mostrarCertificadosVencidos');


//bloque javier fin */


/** Autogenerado */


Route::resource('usuarios', App\Http\Controllers\usuarioController::class);

Route::resource('cargos', App\Http\Controllers\cargoController::class);

Route::resource('localidads', App\Http\Controllers\LocalidadController::class);

Route::resource('tipoDocumentos', App\Http\Controllers\TipoDocumentoController::class);

Route::resource('tipoUsuarios', App\Http\Controllers\TipoUsuarioController::class);

Route::resource('rols', App\Http\Controllers\RolController::class);

Route::resource('generos', App\Http\Controllers\GeneroController::class);

Route::resource('patologias', App\Http\Controllers\PatologiaController::class);

Route::resource('medicos', App\Http\Controllers\MedicoController::class);

Route::resource('tipoCertificados', App\Http\Controllers\TipoCertificadoController::class);

Route::resource('parentescos', App\Http\Controllers\ParentescoController::class);

Route::resource('familiars', App\Http\Controllers\FamiliarController::class);

Route::resource('certificados', App\Http\Controllers\CertificadoController::class);

Route::resource('auditoriaCertificados', App\Http\Controllers\AuditoriaCertificadoController::class);

Route::resource('notificacions', App\Http\Controllers\NotificacionController::class);

Route::resource('notificacionCertificados', App\Http\Controllers\NotificacionCertificadoController::class);

Route::resource('users', App\Http\Controllers\UserController::class);