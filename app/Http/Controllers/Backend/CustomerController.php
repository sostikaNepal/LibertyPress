<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = Customer::all();
       return view('customer/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
//        dd($request->all());


        $request->request->add(['password'=>Hash::make($request->input('password'))]);
        $row = Customer::create($request->all());

        if($row){
            $request->session()->flash('success', 'Customer created successfully');
        } else{
            $request->session()->flash('error', 'Customer creation failed');
        }
        return redirect()->route('customer.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = Customer::find($id);
        if(!$data['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('customer.index');
        }
        return view('customer.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Customer::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('customer.index');
        }
        return view('customer.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $data['row'] = Customer::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('customer.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'customer update Successfully');
        } else {
            $request->session()->flash('error', 'customer Update failed');

        }
        return redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] = Customer::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Customer deleted Successfully');

            } else {
                request()->session()->flash('error', 'Customer deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('customer.index');

    }

    public function login(){
        return view('frontend.customer.login');
    }

    public function register(){

        return view('frontend.customer.register');
    }
}
