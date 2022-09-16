<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signInValidation(Request $request)
    {
        $request->validate([
            'email' => 'required | max:20',
            'password' => 'required | min:6'
        ]);
        return $request->input();
    }
}