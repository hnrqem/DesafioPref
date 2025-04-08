<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm (){
        return view('login');
    }
    public function login(Request $request){
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->route('dashboard')->with('success', 'Login realizado com sucesso!');
        }

       return back()->withErrors([
           'email' => 'Credenciais inválidas.',
       ])->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request)
   {
       Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();

       return redirect('login');
   }

   public function dashboard()
   {
        return view('dashboard');
   }
}
