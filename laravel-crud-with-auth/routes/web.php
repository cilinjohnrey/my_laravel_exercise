<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', [Controller::class, 'mainPage'])->name('main');
Route::get('/welcome', [Controller::class, 'welcomePage'])->name('welcome');
Route::get('/post', [Controller::class, 'postPage'])->name('post');
Route::get('/dashboard', [Controller::class, 'dashboardPage'])->name('dashboard');

Route::get('/signin', [Controller::class, 'signinPage'])->name('signin');
Route::get('/signup', [Controller::class, 'signupPage'])->name('signup');

//Form Sign In
Route::post('/signin', [UserController::class, 'signInValidation'])->name('user.signin');