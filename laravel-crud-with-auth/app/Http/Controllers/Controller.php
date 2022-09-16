<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcomePage()
    {
        return view('welcome');
    }

    public function signinPage()
    {
        return view('auth.signin');
    }
    public function signupPage()
    {
        return view('auth.signup');
    }
    public function dashboardPage()
    {
        return view('page.dashboard');
    }
    public function postPage()
    {
        return view('page.post');
    }
}