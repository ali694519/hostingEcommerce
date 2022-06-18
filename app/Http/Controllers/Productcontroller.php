<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\Order;
// use Session;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;

class Productcontroller extends Controller
{
    //
    public function index()
    {
        $data = product::all();
        return view('product', ['products' => $data]);
    }

    public function detail($id)
    {
        $data = product::find($id);
        return view('detail', ['products' => $data]);
    }

    public function search(Request $request)
    {
        $data = product::where('name', 'like', '%' . $request->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }

    public function addtocart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            // if you dont hav your session() !!!!
            return redirect('login');
        }
    }

    static function cartItem()
    {

        $userId = Session::get('user')['id'];

        return cart::where('user_id', $userId)->count();
    }

    public function cartList() {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    public function reoveCart($id) {
        cart::destroy($id);
        return redirect('cartlist');
    }
    public function ordernow() {
        $userId = Session::get('user')['id'];
         $total =  DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    public function orderPlace(Request $request)
     {
        $userId = Session::get('user')['id'];
         $allCart = cart::where('user_id',$userId)->get();

        foreach($allCart as $cart) {
            $order = new Order();
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->sataus = 'pending';
            $order->payment_method = $request->payment;
            $order->payment_sataus = 'pending';
            $order->address = $request->address;
            $order->save();
            cart::where('user_id',$userId)->delete();
        }
         $request->input();
        return redirect('/');
    }

    public function myorders() {
        $userId = Session::get('user')['id'];
        $orders =  DB::table('orders')
       ->join('products','orders.product_id','=','products.id')
       ->where('orders.user_id',$userId)
       ->get();

       return view('myorders',['orders'=>$orders]);
    }
}
