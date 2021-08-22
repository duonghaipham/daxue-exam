<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\InformationController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\Auth\RankingController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/switch-language/{lang}', [HomeController::class, 'switch'])->name('language.switch');

Route::group([
    'prefix' => 'register',
    'middleware' => 'guest'
], function() {
    Route::get('/', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/', [RegisterController::class, 'store'])->name('register.store');
});

Route::group([
    'prefix' => 'login',
    'middleware' => 'guest'
], function() {
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::get('/logout', [LogoutController::class, 'index'])->name('logout.index')->middleware('auth');

Route::group([
    'prefix' => 'user',
    'middleware' => 'auth'
], function() {
    Route::get('/', [InformationController::class, 'index'])->name('user.index');

    Route::get('/update', [InformationController::class, 'edit'])->name('user.edit');
    Route::post('/update', [InformationController::class, 'update'])->name('user.update');

    Route::get('/change-password', [ChangePasswordController::class, 'edit'])->name('change_password.edit');
    Route::post('/change-password', [ChangePasswordController::class, 'update'])->name('change_password.update');
});

Route::get('/subject/{id}', [SubjectController::class, 'index'])->name('subject.index')->middleware('auth');

Route::get('/ranking', [RankingController::class, 'index'])->name('auth.ranking');

Route::group([
    'prefix' => 'exam',
    'middleware' => 'auth'
], function() {
    Route::get('/{id}', [ExamController::class, 'index'])->name('exam.index');
    Route::get('{id}/exceed', [ExamController::class, 'exceed'])->name('exam.exceed');
    Route::get('/{id}/attempt/{attempt}', [ExamController::class, 'review'])->name('exam.review');
    Route::group(
        ['middleware' => 'exam.take'],
        function () {
            Route::get('/{id}/take', [ExamController::class, 'take'])->name('exam.take');
            Route::post('/{id}/take', [ExamController::class, 'submit'])->name('exam.submit');
        }
    );
});
