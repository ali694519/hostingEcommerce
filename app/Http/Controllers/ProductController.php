<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
     public function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    public function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['products' => $data]);
    }

    public function search(Request $request)
    {
        $data = Product::where('name', 'LIKE', '%' . $request->input('query') . '%')->get();


        return view('search',compact('data'));


    }

    public function addCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            // if you do not hav your session() !!!!
            return redirect('login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return cart::where('user_id', $userId)->count();
    }

    public function cartList(Request $request) {
        if ($request->session()->has('user')) {
        $userId = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cart_id')
        ->get();
        return view('cart_list',['products'=>$products]);


        }else {
            // if you do not hav your session() !!!!
            return redirect('login');
        }
    }

    public function removeCart($id) {
        cart::destroy($id);
        return redirect('cart_list');
    }



    public function orderNow() {
        $userId = Session::get('user')['id'];
         $total =  DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');

        return view('order_now',['total'=>$total]);
    }

    public function orderPlace(Request $request)
     {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];
            $allCart = cart::where('user_id', $userId)->get();

        foreach ($allCart as $cart) {
            $order = new Order();
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $request->payment;
            $order->payment_status = 'pending';
            $order->address = $request->address;
            $order->save();
            cart::where('user_id', $userId)->delete();
         }

        $request->input();
        return redirect('/');
    } else {
        return redirect('login');
    }



    }

    public function myOrders() {
        if (Session::has('user')) {

        $userId = Session::get('user')['id'];
        $orders =  DB::table('orders')
       ->join('products','orders.product_id','=','products.id')
       ->where('orders.user_id',$userId)
       ->get();

       return view('my_orders',['orders'=>$orders]);
    }else {
        return redirect('login');
    }
}
}
