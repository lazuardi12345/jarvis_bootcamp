<?php

use App\Models\Post;
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

    $data = [
        'title' => 'Dashboard'
    ];
    return view('contents.dashboard', $data);
});


Route::get('/users', function () {


    $data = [
        'title' => 'Tables',
        'users' => User::all(),
        'posts' => Post::all()
    ];

    return view('contents.docs', $data);
});

