<?php

namespace App\Http\Controllers;

use App\Models\reserva;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class adminController extends Controller
{
    //
    public function index(
    )
    {

        if(Auth::user()->is_admin){
        $rsrv = reserva::all();
        return view("admin" , compact("rsrv"));
    }else{
        return view("dashboard");
    }
    }

    }

