<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

Route::get('/', function () {
    return view('landingpage', [
        "tittle" => "Landing Page"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});


Route::get('/login',[AdminController::class, 'index'])->middleware('guest');
Route::post('login',[AdminController::class,'authenticate']);
Route::get('/dashboard',[AdminController::class, 'home']);
Route::post('/logout',[AdminController::class, 'logout']);

Route::get('/booking',[UserController::class, 'index']);
Route::get('/history',[UserController::class, 'history']);
Route::post('/inputanbooking',[UserController::class, 'input']);
Route::get('/edit/{booking:id}',[UserController::class, 'edit']);
Route::patch('/update/{id}',[UserController::class, 'update']);
Route::delete('/delete/{id}', [UserController::class, 'delete']);