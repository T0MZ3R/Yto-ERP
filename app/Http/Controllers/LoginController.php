<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        return view('pages/login');
    }

    public function processing(){
        request()->validate([
            'login' => ['required','min:5'],
            'password' => ['required','min:5'],
        ]);

        $resultat = auth()->attempt([
            'login' => request('login'),
            'password' => request('password'),
        ]);

        if($resultat){
            return redirect('dashboard');
        }

        return back()->withErrors([
            'login' => 'nn',
        ]);
    }

    public function signout(){
        auth()->logout();
        return redirect(route('login'));
    }
}
