<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
        
    public function index(){
         $response = HTTP::get('https://www.dnd5eapi.co/api')->json();
        $abilityScores = HTTP::get('https://www.dnd5eapi.co' . $response['ability-scores'])->json();

        $abilities = Arr::map($abilityScores['results'],function($ability){
            return [
                'index' => $ability['index'],
                'url' => "https://www.dnd5eapi.co" .$ability['url']
            ];
        });
        
        $array = [];
        foreach($abilities as $ability){
            $response = HTTP::get($ability['url'])->json();
            array_push($array,$response);
        }

        return view ('index',compact('abilityScores','array'));
    }

  
}
