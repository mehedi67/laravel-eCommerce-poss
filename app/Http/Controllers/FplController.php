<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FplController extends Controller
{
    public function getdata(){
        $response = Http::get('https://fantasy.premierleague.com/api/bootstrap-static/');
        $response = $response->json()['elements'];
        return $response;
    }
}
