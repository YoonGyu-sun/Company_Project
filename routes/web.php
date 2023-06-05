<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', [HomeController::class, 'hello']);

Route::get('/contact', [HomeController::class, 'contact']);

// Controller project
Route::prefix('tasks')->middleware('auth')->group(function(){
    Route::get('/', [TaskController::class, 'index']);

    Route::get('/create', [TaskController::class, 'create']);
    
    Route::post('/', [TaskController::class, 'store']);
    
    Route::get('/{task}', [TaskController::class, 'show']);
    
    Route::get('/{task}/edit', [TaskController::class, 'edit']);
    
    Route::put('/{task}', [TaskController::class, 'update']);
    
    Route::delete('/{task}', [TaskController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


