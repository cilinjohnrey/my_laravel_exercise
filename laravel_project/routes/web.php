<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
   Alert::success('Success Title', 'Success Message');

   return view('welcome');
});

// Route::get('/students', [StudentsController::class, 'index']);

// Route::get('/students/{id}', [StudentsController::class, 'show']);

Route::get('/home', [StudentsController::class, 'index']);

Route::get('/login', [UsersController::class, 'login']);

Route::get('/register', [UsersController::class, 'register']);

Route::get('/logout', [UsersController::class, 'logout']);

Route::get('/store', [UsersController::class, 'store']);
