<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return redirect()->intended(route('product.index'));
      }

      return back()->withErrors(["email" => "informations de connexion erronees."])->onlyInput('email');
    }

    public function logout(){
      Auth::logout();
      return redirect(url('/'))->with("success","vous avez bien ete deconnecter");
    }

    public function signup(){
      if(User::count() > 0){
        return redirect(url('login'));
      }
      return view('signup');
    }

    public function doSignup(){
      $data = request()->validate([
        'name' => ['required'],
        'email' => ['required','email'],
        'password' => ['required','min:8','confirmed']
      ]);
      $data['password'] = Hash::make($data['password']);

      $user = User::create($data);
      // Auth::login($user);
      return redirect(url('login'))->with("success","vous avez bien ete inscrit");
    }

}
