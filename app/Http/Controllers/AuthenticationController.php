<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    //

    public function login(Request $request){
        $credentials = $request->only('username', 'password');
//        dd($credentials);
        if (Auth::attempt($credentials)) {

            return redirect('dashboard');

        }
        else {
            dd("Error");
        }

    }
}
