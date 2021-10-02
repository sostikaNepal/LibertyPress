<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function payment($id)
    {
        $data['row'] =Product::find($id);
        if(!$data['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('frontend.payment');
        }

        return view('frontend/payment',compact('data'));

    }



}
