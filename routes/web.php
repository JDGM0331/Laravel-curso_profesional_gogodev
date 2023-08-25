<?php

use Illuminate\Support\Facades\Route;

/* // Métodos staticos para construir rutas
Route::view();
Route::get('mi/ruta', ControladorDeLaRuta);
Route::post('mi/ruta', ControladorDeLaRuta);
Route::put('mi/ruta', ControladorDeLaRuta);
Route::delete('mi/ruta', ControladorDeLaRuta);
Route::patch('mi/ruta', ControladorDeLaRuta); */

/* Route::view('/', 'welcome')->name('welcome'); // Generar ruta para que renderice una vista estatica y especificarle una nombre */
Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
