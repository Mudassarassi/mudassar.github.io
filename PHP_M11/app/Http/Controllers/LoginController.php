<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //


    public function login(request $request){

        //$login = $request->session()->get('name');
        return view('login');

    }


    public function register(request $request){

        $login = $request->input();
        $request->session()->put('user', $login['name']);
        return view('profile');
      //  return view('login');

    }
}
