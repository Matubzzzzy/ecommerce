<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;


class HomeController extends Controller
{
    public function redirect()
{
    if (Auth::check()) {
        $usertype = Auth::user()->usertype;

        if ($usertype == 1) {
            return view('admin.home');
        } else {
            $data = product::all();
            $user=auth()->user();
            $count=cart::where('phone', $user->phone)->count();
            return view('user.home', compact('data', 'count'));
        }
    } else {
        // User is not authenticated
        // You can redirect them to the login page or handle the situation accordingly
        return redirect()->route('login');
    }
}


public function index(){

    if(Auth::id()){
        $data = product::all();
        return view('user.home', ['data' => $data]);
    }else{
        return redirect('redirect');
    }
    }
    
    public function addcart(Request $request, $id){
        if(Auth::id())
        {
            $user=auth()->user();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$request->quantity;
            $cart->save();

            return redirect()->back()->with('message', 'The product has been added to cart successfully! (/◕ヮ◕)/');
        }else{
            return redirect('login');
        }
        
        }
        public function showcart(){
            $user=auth()->user();
            $cart=cart::where('phone', $user->phone);
            $count=cart::where('phone', $user->phone)->count();
            return view('user.showcart', compact('count', 'cart'));
        }    



}