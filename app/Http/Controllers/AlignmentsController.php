<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlignmentsController extends Controller
{
    public function index(){
        $response = Http::get('https://www.dnd5eapi.co/api/alignments')->json();
        $alignements = $response['results'];

        $alignementsDesc =[];
       foreach($alignements as $alignement){
            $alignementDetail = Http::get('https://www.dnd5eapi.co'. $alignement['url'])->json();
            array_push($alignementsDesc,$alignementDetail);

       }
        return view('alignments.index',compact('alignementsDesc'));

    }
}
