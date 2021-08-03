<?php

use App\Http\Controllers\BandejaEntrada;
use App\Http\Controllers\EstrategiaFAController;
use App\Http\Controllers\Login_Estadistica;
use App\Http\Controllers\MatrizDAFOController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/addingfa', [EstrategiaFAController::class, 'store'])->name('add.estrategiafa');
Route::get('/gettingfa/{id}', [EstrategiaFAController::class, 'getEditFaByID']);
Route::put('/updatingfa', [EstrategiaFAController::class, 'update'])->name("Update.Fa");
Route::delete('/deleting/{id}', [EstrategiaFAController::class, 'destroy']);


//another way
Route::get('/AllDataFa', [EstrategiaFAController::class, 'AllDataFa']);
Route::post('/addingfa2', [EstrategiaFAController::class, 'addDataJson'])->name('add.estrategiafaJson');


Route::resource('fortaleza', 'App\Http\Controllers\FortalezaController');
Route::resource('oportunidades', 'App\Http\Controllers\OportunidadesController');
Route::resource('amenazas', 'App\Http\Controllers\AmezanasController');
Route::resource('debilidades', 'App\Http\Controllers\DebilidadesController');
//Route::resource('matriz_analisis', 'App\Http\Controllers\MatrizDAFOController');
Route::resource('formarmatriz', 'App\Http\Controllers\MatrizAnalisisEnviar')->middleware('role:Usuario');
Route::resource('estrategiafa', 'App\Http\Controllers\EstrategiaFaController');

Route::resource('matriz_analisis_admin', 'App\Http\Controllers\MatrizAnalisisAdminController');

Route::resource('evaluacion_login', Login_Estadistica::class)->middleware('guest');
Route::post('evaluacion_loginout', 'App\Http\Controllers\Login_Estadistica@prueba')->name('logout');

Route::resource('bandeja_entrada', BandejaEntrada::class);


Route::group(['middleware' => ['role:super-admin']], function () {
    Route::resource('estrategiafa', 'App\Http\Controllers\EstrategiaFaController');

});