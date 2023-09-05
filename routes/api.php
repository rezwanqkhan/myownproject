<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// fluter response buraya yapacak
//Route::group(['prefix'=>'api'],function(){
    Route::post('/about-save', [PostController::class,'store']);
//});

