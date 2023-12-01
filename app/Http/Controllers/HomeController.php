<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;


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
            return view('user.home', ['data' => $data]);
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

    



}