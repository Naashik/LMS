<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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



Route::get('/email', function () {
    return view('email');
});

Route::get('/adminregister', function () {
    return view('adminregister');
}); 

Route::get('/adminlogin', function () {
    return view('adminlogin');
}); 


Route::get('/admin',[CustomAuthController::class,'admin']);


Route::post('admin',[CustomAuthController::class,'adminUser'])->name('admin');

Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');



Route::post('email',[CustomAuthController::class,'emailUser'])->name('email');






Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');

Route::get('/dashboard',[CustomAuthController::class,'dashboard']);





