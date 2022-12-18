<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stawecki/305403/people',[PeopleController::class,'index']);
Route::get('/stawecki/305403/people/{people}', [PeopleController::class, 'show']);
Route::delete('/stawecki/305403/people/{people}',[PeopleController::class, 'delete']);
Route::post('/stawecki/305403/people/{people}',[PeopleController::class, 'store']);
Route::put('/stawecki/305403/people/{people}',[PeopleController::class, 'update']);