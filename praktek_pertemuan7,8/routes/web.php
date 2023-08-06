<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\userController;
use App\Models\post;
use App\Models\User;
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
    $data=["title"=> "dashboard", 
        "user"=>["name"=>"Watashi",
        "email"=> "Lazuardi@gmail.com",   
        ]];
    return view('conten.dashboard', $data);
});

Route::get('/user', [userController::class, 'index']);
Route::get('/user/[id]/edit', userController::class, 'edit');
Route::resource('/categories', categoryController::class);