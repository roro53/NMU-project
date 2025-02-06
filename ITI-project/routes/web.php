<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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

Route::get('/',[AuthController::class,'login']);
Route::get('index',[AuthController::class,'index']);



Route::get('post',[PostController::class,'index']);
Route::post('post',[PostController::class,'create_post'])->name('create_post');


Route::get('login',[AuthController::class,'login']);
Route::post('/submit',[AuthController::class,'auth_login'])->name('student.login');


Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'create_user']);


Route::get('post/{id}/edit',[PostController::class,'edit'])->name('edit');
Route::put('post/{id}/edit',[PostController::class,'update'])->name('update');
Route::delete('post/{id}', [PostController::class,'delete'])->name('delete');