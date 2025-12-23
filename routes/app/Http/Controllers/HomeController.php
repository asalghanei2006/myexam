<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('index');
    }

    public function saveForm(Request $request){
        $user =new User();
    $user->id = $requesrt->id;

    $user->price = $requesrt->price;

    $user->name = $requesrt->name;

    $user->adress = $requesrt->adress;

    $post->save();
    }

    public function show(){
        $user = new User();
        $users = $user->all();

        return view('show' , compact(users));

    }
}
