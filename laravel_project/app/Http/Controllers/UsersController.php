<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
        dd($request);
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
