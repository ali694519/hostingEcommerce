<?php

use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


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


//rout to regiater to th webpage
Route::view('/register', 'register');

// route to login page...
Route::post('/login',[Usercontroller::class,'login']);
//route for product page...
//route to register username and password
Route::post('/register',[Usercontroller::class,'register']);

Route::get('/',[Productcontroller::class,'index']);
//route for detail products
Route::get('detail/{id}',[Productcontroller::class,'detail']);
//route for search products
Route::get('search/',[Productcontroller::class,'search']);
//route for add to cart
Route::post('add_to_cart',[Productcontroller::class,'addtocart']);
//route for add cart(0,1,2,3....n)
Route::get('cartItem',[Productcontroller::class,'cartItem']);
//rout for display cart
Route::get('cartlist',[Productcontroller::class,'cartList']);
//route fro remove item from cart
Route::get('remove/{id}',[Productcontroller::class,'reoveCart']);
//route for order item
Route::get('ordernow',[Productcontroller::class,'ordernow']);
//route to input th data order
Route::post('orderplace',[Productcontroller::class,'orderPlace']);
//route to display the orders
Route::get('myorders',[Productcontroller::class,'myOrders']);




