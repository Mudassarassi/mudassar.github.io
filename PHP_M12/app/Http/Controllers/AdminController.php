<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $user=Auth::user();

        if($user->esAdmin()){

            return $request->session()->all();

        }else{
            echo "no Tienes permiso para ver esta pagina";
        }

    }
}
