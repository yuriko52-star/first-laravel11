<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/test',[TestController::class,'index']);
Route::get('/hello',[HelloController::class, 'index']);

