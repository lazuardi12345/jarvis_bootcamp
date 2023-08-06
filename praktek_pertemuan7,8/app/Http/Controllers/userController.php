<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\post;
use Illuminate\Http\Request;


class userController extends Controller
{
    public function index()
    {
        return view('conten.user', [
            "title" => "Users",
            "users" => User::all(),
            "posts" => post::all(),
            
        ]);

}
public function edit()
{
    return view('conten.user', [
        "title" => "Users Edit",
        "users" => User::all(),
        "posts" => post::all(),
        
    ]);
}
}