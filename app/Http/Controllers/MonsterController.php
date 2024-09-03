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
        $monsterDetails = [];
            // foreach($monsters as $monster){
            //     $monsterDetail = HTTP::get('https://www.dnd5eapi.co'.$monster['url']);
            //     array_push($monsterDetails,$monsterDetail);
            // }
        return view ('monster.index',compact('monsters'));
    }

    public function showMonster($index){
        $response = HTTP::get('https://www.dnd5eapi.co/api/monsters/'.$index)->json();
        $monster = $response;

        // $monsterImg = 'https://www.dnd5eapi.co'.$monster['image'];

        return view ('monster.show', compact('monster'));
    }
    
}
