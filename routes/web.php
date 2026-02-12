<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Mi-Nombre', function () {
    return "Miguel Angel Solano Diaz";
});

Route::get('/php-basico........', function () {


    return "MIGUEL ANGEL SOLANO DIAZ";
});


