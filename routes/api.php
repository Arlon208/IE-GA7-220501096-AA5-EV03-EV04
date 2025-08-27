<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PetController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function(){
    Route::apiResource('customers',CustomerController::class);
    Route::apiResource('pets',PetController::class);

});