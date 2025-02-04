<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
      return view('login');
    }

    public function doLogin(Request $request){
      $data = $request->validate([
        'email' => ['required','email'],
        'password' => ['required','min:8']
      ]);
      
      if(Auth::attempt(["email"=> $data['email'], 'password' => $data['password']])){
        $request->session()->regenerate();
        return redirect()->intended(url('/'));
      }

      return back()->withErrors(["email" => "informations de connexion erronees."])->onlyInput('email');
    }

    public function logout(){
      Auth::logout();
      return redirect()->url('/')->with("success","vous avez bien ete deconnecter");
    }

}
