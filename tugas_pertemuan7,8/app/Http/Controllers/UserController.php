<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    public function index(){
        return view('contens.docs',[
            "title"=>"Users",
            "users"=>User::all(),
            "posts"=>Post::all(), 
        ]);
    }
    public function edit($id)
    {
        return view('contens.edit',[
            "title"=>"Users Edit",
            "user"=>User::find($id),
        ]);
    } 
   public function update($id, Request $request)
   {
     $user = User::find($id);
     $validatedData = $request->validate([
        "email" => 'unique:users,email, '. $id . '|required',
        "name" => 'required|max:100|min:5',
     ]) ;
     $user->update($validatedData);
     return redirect('/users/'. $id .'/edit')->with('success', 'Berhasil Merubah Data. ');
   }
   public function create()
   {
       return view('contens.create',[
           "title"=>"Users Create",
       ]);
   } 
  public function store( Request $request)
  {
    $validatedData = $request->validate([
       "email" => 'unique:users,email|required',
       "name" => 'required|max:100|min:5',
       "password" => 'required|max:255|min:5',
    ]) ;
    User::create($validatedData);

    return redirect('/users')->with('success', 'Berhasil Menambah Data. ');
  }
  public function show($id)
    {
        return view('contens.show',[
            "title"=>"Users Detai",
            "user"=>User::find($id),
        ]);
    } 
}