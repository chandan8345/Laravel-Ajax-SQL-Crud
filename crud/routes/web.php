<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;


Route::get('/',[myController::class,'index']);
Route::post('/create',[myController::class,'create']);
Route::get('/update',[myController::class,'update']);
Route::get('/remove',[myController::class,'@remove']);
Route::get('/removeAll',[myController::class,'@removeAll']);
