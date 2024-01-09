<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::get('/tasks', [PostController::class, 'index']);
Route::get('/', [PostController::class, 'index']);
Route::get('/tasks/create', [PostController::class, 'create']);
Route::get('/tasks/{task}', [PostController::class ,'show']);
Route::get('/tasks/{task}/edit', [PostController::class, 'edit']);
Route::put('/tasks/{task}', [PostController::class, 'update']);
Route::post('/tasks', [PostController::class, 'store']);
Route::delete('/tasks/{task}', [PostController::class, 'delete']);