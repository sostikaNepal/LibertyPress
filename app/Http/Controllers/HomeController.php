<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['customer']=Customer::count();
        $data['product']=Product::count();
        return view('home',compact('data'));
    }

    public function home(){

        $this->title = "hello";
        $data['rows'] = Product::all();
        return view('frontend.home.index',compact('data'));
    }
}
