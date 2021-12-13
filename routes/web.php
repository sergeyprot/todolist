<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [TodolistController::class, 'index'])->name('index');
Route::post('store', [TodolistController::class, 'store'])->name('store');
Route::delete('/{todolist:id}', [TodolistController::class, 'destroy'])->name('destroy');
Route::get('/store', 'App\Http\Controllers\TodolistController@store');
//Route::get('/store', 'App\Http\Controllers\TodolistController@show');
Route::get('home', function () {
    return view('home')->with('todolists', $todolists);
});
/*Route::get('/home', function () {
    return View('home', compact('todolists'));
});*/

/*Route::get('/home', function () {
return View::make('home', array(
    'todolists' => $todolists    
));
});*/