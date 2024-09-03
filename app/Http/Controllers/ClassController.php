<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClassController extends Controller
{
    public function index(){
        $response = Http::get('https://www.dnd5eapi.co/api/classes')->json();
        $classes = $response['results'];
        return view('classes.index',compact('classes'));
    }
    public function show($index){
        $class =  Http::get('https://www.dnd5eapi.co/api/classes/'.$index)->json();
        return view ('classes.show',compact('class'));
    }
}
