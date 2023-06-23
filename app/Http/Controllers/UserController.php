<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $formValidate = $request->validate([
            'name'=>['min:3','required'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|min:6|confirmed',
        ]);
        $formValidate['password']= bcrypt($formValidate['password']);
        $user=User::create($formValidate);
        auth()->login($user);
        return redirect('/postjob/manage')->with('message','You have successfuly Create account and Login');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','You have succesfully LogOut');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){

        $formValidate = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($formValidate)){
            $request->session()->regenerate();
            return redirect('/postjob/manage')->with('message','You have successfully Log in!');
        }else{
            return back()->withErrors(['email'=>'invalid credintal'])->onlyInput('email');
        }

    }


}










