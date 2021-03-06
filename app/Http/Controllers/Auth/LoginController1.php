<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {

      return view('auth.login');
        //echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    public function authenticate(Request $request)
    {
        

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }
    public function sample_page(){
        return view('sample_page');
    }


    public function logout() {
      Auth::logout();

      return redirect('login');
    }

}