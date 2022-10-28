<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Itsmurumba\Zettatel\Zettatel;
use Illuminate\Support\Facades\Http;

class ZettatelController extends Controller
{

    public function sendSmsByBatch(){
        $zettatel = new Zettatel();

        // $data['mobile'] = '254720310436,254702821537';
        $data['mobile'] = '254720310436';
        $data['msg'] = 'Hello World from Batch';

        $response = $zettatel->sendSmsBatch($data);

        return $response;
    }

    public function sendSmsByGroup(){
        $zettatel = new Zettatel();

        $data['groupIds'] = '271,272';
        $data['msg'] = 'Hello World From Groups';

        $response = $zettatel->sendSmsGroup($data);

        return $response;
    }

    public function sendSmsByFile(Request $request){
        $zettatel = new Zettatel();

        $data['filePath'] = $request->file('file');
        $data['msg'] = 'Hello World From Files. Team Zettatel';

        $response = $zettatel->sendSmsFile($data);

        return $response;
    }


}
