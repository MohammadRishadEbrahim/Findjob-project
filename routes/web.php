<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[JobController::class,'index']);
Route::get('/about',[JobController::class,'about']);
Route::get('/contact',[JobController::class,'contact']);
Route::get('/joblist',[JobController::class,'alllist']);
Route::get('/postjob/manage',[JobController::class,'manage']);
Route::post('/postjob',[JobController::class,'store'])->middleware('auth');
Route::get('/postjob/create',[JobController::class,'create'])->middleware('auth');
Route::get('/postjob/{job}/edit',[JobController::class,'edit'])->middleware('auth');
Route::put('/postjob/{job}',[JobController::class,'update'])->middleware('auth');
Route::delete('/postjob/{job}',[JobController::class,'destroy'])->middleware('auth');
Route::get('/postjob/{job}',[JobController::class,'show']);




Route::get('/register',[UserController::class,'create'])->middleware('guest');
Route::post('/users',[UserController::class,'store']);


Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate',[UserController::class,'authenticate']);


// Route::get('/apply/manage',[CustomerController::class,'manage'])->middleware('auth');
Route::get('/apply/applier',[CustomerController::class,'applier'])->middleware('auth');
Route::get('/apply/applier/{customer}',[CustomerController::class,'showApplier'])->middleware('auth');
Route::post('/apply/{job}',[CustomerController::class,'store']);
Route::delete('/apply/applier/{customer}',[CustomerController::class,'destroy']);
