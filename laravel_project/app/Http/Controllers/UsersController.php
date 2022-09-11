<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;

class UsersController extends Controller
{
    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        }else{
            // return response()->view('/errors.404');
            return abort(404);
        }
    }


    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required|min:4'],
            'email' => ['required|email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        auth()->login($user);
    }

    public function register(){
        if(View::exists('user.register')){
            return view('user.register');
        }else{
            // return response()->view('/errors.404');
            return abort(404);
        }
    }
}
