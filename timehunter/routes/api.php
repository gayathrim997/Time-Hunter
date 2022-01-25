<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();
//});
//CRUD routes for clients
Route::group(['prefix'=>'clients'],function(){
Route::get('/',[ClientController::class,'index'])->name('api.clients.index');
Route::post('/',[ClientController::class,'create'])->name('api.clients.create');
Route::get('/{id}',[ClientController::class,'show'])->name('api.clients.show');
Route::put('/{id}',[ClientController::class,'update'])->name('api.clients.update');
Route::delete('/{id}',[ClientController::class,'destroy'])->name('api.clients.destroy');
});
//CRUD routes for projects
Route::group(['prefix'=>'projects'],function(){
   Route::get('/',[ProjectController::class,'index'])->name('api.projects.index');
   Route::post('/',[ProjectController::class,'create'])->name('api.projects.create');
   Route::get('/{id}',[ProjectController::class,'show'])->name('api.projects.show');
   Route::put('/{id}',[ProjectController::class,'update'])->name('api.projects.update');
   Route::delete('/{id}',[ProjectController::class,'destroy'])->name('api.projects.destroy');
   });
   