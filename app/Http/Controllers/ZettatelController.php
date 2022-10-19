<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Itsmurumba\Zettatel\Zettatel;
use Illuminate\Support\Facades\Http;

class ZettatelController extends Controller
{

    public function sendSmsBybatch(){
        $zettatel = new Zettatel();

        $data['mobile'] = '254720310436,254702821537';
        $data['msg'] = 'Hello World';

        $response = $zettatel->sendSmsBatch($data);

        return $response;


        $data = array_filter([
            "userid" => 'itsmurumbatest',
            "password" => '6CZQS8RN',
            "sendMethod" => "quick",
            "mobile" => '254720310436',
            "msg" => 'Hello World',
            "senderid" => 'Zettatel',
            "msgType" => "text",
            "duplicatecheck" => "true",
            "output" => "json"
        ]);

        $response = Http::withHeaders([
            'apikey' => '515fcd9839474bf84c8d58922eb2a2cec52db398',
            'content-type'  => 'application/x-www-form-urlencoded',
            'cache-control' => 'no-cache'
        ])->post(
            'https://portal.zettatel.com/SMSApi/send',
            $data
        );

        return $response;
    }
}
