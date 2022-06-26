<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    

    public function welcome()
    {


        $url="https://digimon-api.vercel.app/api/digimon";

        //Api return name, img and level
        $digimons=Http::get($url)->json();

        return view('welcome', ['digimons' => $digimons]);

    }

    function digimon($digimon)
    {

        $nombre=$digimon;

        $url="https://digimon-api.vercel.app/api/digimon/name/".$digimon;
        
        $digimon=Http::get($url)->json();

        return view('digimon', ['digimon' => $digimon, 'nombre' => $nombre]);

    }

}
