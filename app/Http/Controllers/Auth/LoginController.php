<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
          public function index () {
              return view('auth.login');
          }

          public function login(request $request){
    // VALIDATE
              $credentials = $this->validate($request, [
              'email'=> ['email', 'required'],
              'password' => ['required']
              ]);

              
        // LOGIN
        if (Auth::attempt($credentials, $request->remember)) {
          return redirect()->intended();
        }else{
          return back()->withErrors([
          'failed'=> 'Incorrect Password'
          ]);
        }

          }
}