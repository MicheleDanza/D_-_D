<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConditionController extends Controller
{
    public function index(){
        $response = Http::get('https://www.dnd5eapi.co/api/conditions')->json();
        $conditions = $response['results'];
        $conditionsDetails=[];
     
        foreach($conditions as $condition){
            $conditionDetail = Http::get('https://www.dnd5eapi.co/api/conditions/'.$condition['index'])->json();
            array_push($conditionsDetails,$conditionDetail);
        }
        return view('conditions.index',compact('conditionsDetails'));
    }
}
