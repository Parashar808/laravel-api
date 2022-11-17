<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;

use App\Http\Controllers\ABController;

use App\Http\Controllers\DController;
use App\Http\Controllers\PicController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[dummyAPI::class,'getData']);
// Route::get("list",[DeviceController::class,'list']);
Route::get("list/{id?}",[ABController::class,'list']);
Route::post("add",[DController::class,'add']);
Route::put("update",[DController::class,'update']);
Route::get("search/{name}",[DController::class,'search']);
Route::delete("delete/{id}",[DController::class,'delete']);
Route::post("save",[DController::class,'save']);
Route::post("pic",[PicController::class,'pic']);