<?php

use App\Http\Controllers\categoryController;
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

Route::get('/', function () {

    $data = [
        'title' => 'Dashboard'
    ];
    return view('contens.dasboard', $data);
});


Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::get('/users/{id}/show', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);


