<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
  return view('index');
});

Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::view('/subject/view', 'subject.view');

Route::view('/exam/view', 'exam.view');

Route::view('/password/change', 'auth.change');

Route::view('/login', 'auth.login');

Route::view('/register', 'auth.register');

Route::view('/exam/take', 'exam.take');

Route::view('/user', 'auth.view');

Route::view('user/update', 'auth.update');
