<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserCOntroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



#Route::post("add",[PostController::class,"store"]);
Route::post("add",[RoleController::class,"store"]);
Route::post("profile/add",[ProfileController::class,"store"]);
#Route::post("user/add",[UserCOntroller::class,"store"]);

Route::prefix('post')->group(function () {

    Route::get("/",[PostController::class,"index"]);
    Route::get("/{id}",[PostController::class,"getPost"]);
    Route::put("update/{id}",[PostController::class,"update"]);
    Route::post("add",[PostController::class,"store"]);
    Route::delete("delete/{id}",[PostController::class,"delete"]);
});
