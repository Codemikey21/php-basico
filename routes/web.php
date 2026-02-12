<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Mi-Nombre', function () {
    return "Miguel Angel Solano Diaz";
});

Route::get('/php-basico........', function () {

    $name = "Miguel Solano";
    $height = 1.72;

    $isLogin = true;
    $age = 20;
    echo "<h2> ". $name ." </h2>";

    echo "<br><br><br>************** ESTRUCTURAL DE CONTROL******************<br><br><br>";

    $message = "Soy $name, tengo $age años.";


    $message .= $isLogin ? "Estoy loguedado" : "No estoy logueado";

    echo $message;

    echo "<br><br><br>************** ESTRUCTURAL DE DATOS******************<br><br><br>";

    $pc = [
        "name" => "pc Gamer core9",
        "price" => 6000,
        "marca" => "Lenovo"
    ];

    $teclado = [
        "name" => "pc Gamer core9",
        "price" => 200,
        "marca" => "Asus"
    ];

    $listaProductos = [$pc , $teclado];

    foreach ($teclado as $item){
        echo $item['name'] . "<br>";
    }




});

function valadateAge($age){
    if($age >= 18){
        return  " Soy mayor de edad.";
    }else{
        return "Soy menor de edad.";
    }

}
