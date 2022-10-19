<?php

namespace Itsmurumba\Calculator;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a, $b){
        $results = $a + $b;

        return view('calculator::index', compact('results'));
    }

    public function subtract($a, $b){
        $results = $a - $b;

        return view('calculator::index', compact('results'));
    }
}
