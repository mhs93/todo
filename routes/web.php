<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[TodoController::class,'index'])->name('todos.list');
Route::get('todos/create',[TodoController::class,'create'])->name('todo.create');
Route::post('todos/store',[TodoController::class,'store'])->name('todos.store');
Route::get('todos/show/{id}',[TodoController::class,'show'])->name('todos.show');
Route::get('todos/edit/{id}',[TodoController::class,'edit'])->name('todos.edit');
Route::post('todos/update/{id}',[TodoController::class,'update'])->name('todos.update');
Route::delete('todos/delete/{id}',[TodoController::class,'destroy'])->name('todos.delete');

