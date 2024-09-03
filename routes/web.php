<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MonsterController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\AlignmentsController;
use App\Http\Controllers\ClassController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[ApiController::class,'index'])->name('index');

Route::get('/monsters',[MonsterController::class,'indexMonster'])->name('monsters');
Route::get('/monsters/{index}',[MonsterController::class,'showMonster'])->name('monster');

Route::get('alignments',[AlignmentsController::class,'index'])->name('alignments');

Route::get('conditions',[ConditionController::class,'index'])->name('conditions');

Route::get('classes',[ClassController::class,'index'])->name('classes');
Route::get('classes/{index}',[ClassController::class,'show'])->name('class');