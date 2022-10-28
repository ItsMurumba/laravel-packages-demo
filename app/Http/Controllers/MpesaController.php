<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Itsmurumba\Mpesa\Mpesa;

class MpesaController extends Controller
{
    public function expressPayment()
    {
       $mpesa = new Mpesa();

       $response = $mpesa->express(1,254720310436,'Test Payment');

       return $response;


    }

    public function lipaNaMpesaCallbackURL(Request $request)
    {
       print_r($request);
    }
}
