<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('contens.docs',[
            'title'=>'Users',
            'users'=>User::all(),
            'posts'=>Post::all(), 
        ]);
    }
}
