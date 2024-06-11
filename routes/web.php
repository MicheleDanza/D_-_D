<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\MonsterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[ApiController::class,'index'])->name('index');
Route::get('/monsters',[MonsterController::class,'indexMonster'])->name('monsters');
Route::get('/monsters/{index}',[MonsterController::class,'showMonster'])->name('monster');