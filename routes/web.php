<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/empleado','App\Http\Controllers\EmpleadoController');

Route::resource('/afiliado','App\Http\Controllers\AfiliadoController');

Route::resource('/deposito','App\Http\Controllers\DepositoController');

Route::resource('/retiro','App\Http\Controllers\RetiroController');
