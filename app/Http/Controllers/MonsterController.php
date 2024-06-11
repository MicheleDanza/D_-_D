<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MonsterController extends Controller
{
    public function indexMonster(){

        $response = HTTP::get('https://www.dnd5eapi.co/api/monsters')->json();
        $monsters = $response['results'];

        // $monster = [];
        //     foreach($monsters as $monster){
        //         $response = HTTP::get('https://www.dnd5eapi.co'.$monster['url']);
        //         array_push($monster,$response);
        //     }
        

        return view ('monster.index',compact('monsters'));
    }

    public function showMonster($index){
        $response = HTTP::get('https://www.dnd5eapi.co/api/monsters/'.$index)->json();
        $monster = $response;
        return view ('monster.show', compact('monster'));
    }
    
}
