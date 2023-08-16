<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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

Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});


//rout to register to th webpage
Route::view('/register', 'register');

// route to login page...
Route::post('/login',[UserController::class,'login']);

//route to register username and password
Route::post('/register',[UserController::class,'register']);


require __DIR__.'/dashboard.php';
