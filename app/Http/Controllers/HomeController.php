<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('index');
    }

    public function store(Request $requesrt){

        $user =new Good();
        // $user->id = $requesrt->id;

        $user->price = $requesrt->price;
        $user->name = $requesrt->name;
        $user->adress = $requesrt->adress;

        $user->save();

        if($requesrt->action === 'print'){
return redirect()->route('show');
        }
 return view('showMessage');
    }

    public function show(){
        $user = new Good();
        $users = $user->all();

        return view('show' , compact('users'));
    }
}

