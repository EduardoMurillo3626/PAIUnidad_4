<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('saludo/{nombre}/{apellido}', function ($nombre,$apellido) {
    return "Hola, bienvenido $nombre $apellido";
});

Route::get('suma/{num1}/{num2}', function ($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: Los parámetros deben ser números.";
    }
    $resultado = $num1 + $num2;
    return "El resultado de la suma de $num1 y $num2 es: $resultado";
});

Route::get('resta/{num1}/{num2}', function ($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: Los parámetros deben ser números.";
    }
    $resultado = $num1 - $num2;
    return "El resultado de la resta de $num1 y $num2 es: $resultado";
});

Route::get('multiplicacion/{num1}/{num2}', function ($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: Los parámetros deben ser números.";
    }
    $resultado = $num1 * $num2;
    return "El resultado de la multiplicacion de $num1 y $num2 es: $resultado";
});

Route::get('division/{num1}/{num2}', function ($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: Los parámetros deben ser números.";
    }
    $resultado = $num1 / $num2;
    return "El resultado de la division de $num1 y $num2 es: $resultado";
});
