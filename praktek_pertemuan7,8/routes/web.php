<?php

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
        "user"=>["name"=>"<h5>Watashi</h5>",
        "email"=> "Lazuardi@gmail.com",   
        ]];
    return view('conten.dashboard', $data);
});

Route::get('/user', function () {
        return view('conten.user', [
            "title" => "Users",
            "users" => User::all(),
            "posts" => post::all(),
            
        ]);
});

