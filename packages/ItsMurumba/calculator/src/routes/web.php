<?php

use Illuminate\Support\Facades\Route;
use Itsmurumba\Calculator\CalculatorController;

Route::get('calculator', function () {

    echo 'Hello from calculator package by ItsMurumba!';

});

Route::get('add/{a}/{b}', [CalculatorController::class, 'add']);
Route::get('subtract/{a}/{b}', [CalculatorController::class, 'subtract']);







