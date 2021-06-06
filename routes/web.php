<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('fortaleza', 'App\Http\Controllers\FortalezaController');
Route::resource('oportunidades', 'App\Http\Controllers\OportunidadesController');
Route::resource('amenazas', 'App\Http\Controllers\AmezanasController');
Route::resource('debilidades', 'App\Http\Controllers\DebilidadesController');


Route::view('/', 'welcome')->middleware('guest');

Route::view('login', 'login')->name('login')->middleware('guest');


Route::view('dashboard', 'dashboard')->middleware('role:S_Admin');

Route::view('test', 'test');

Route::resource('productos', 'App\Http\Controllers\ProductosController')->middleware('auth');


Route::post('login', function () {

    $credentials = request()->only('name', 'password');

    if (Auth::attempt($credentials)) {

        request()->session()->regenerate();

        return redirect('dashboard');
    }
    return redirect('login');
});
