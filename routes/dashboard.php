<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

//route for product page...

Route::get('/',[ProductController::class,'index']);
//route for detail products
Route::get('detail/{id}',[ProductController::class,'detail']);
//route for search products
Route::get('search',[ProductController::class,'search'])->name('search');
//route for add to cart
Route::post('add_to_cart',[ProductController::class,'addCart']);
//route for add cart(0,1,2,3....n)
Route::get('cartItem',[ProductController::class,'cartItem']);
//rout for display cart
Route::get('cart/list',[ProductController::class,'cartList']);
//route fro remove item from cart
Route::get('remove/{id}',[ProductController::class,'removeCart']);
//route for order item
Route::get('order/now',[ProductController::class,'orderNow']);
//route to input th data order
Route::post('order/place',[ProductController::class,'orderPlace']);
//route to display the orders
Route::get('my/orders',[ProductController::class,'myOrders']);
