<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = Product::all();
        return view('Product.index',compact('data'));
    }

    public function indexFront(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

            $file = $request->file('image_file');
            if ($request->hasFile("image_file")) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/images/'), $fileName);
                $request->request->add(['image' => $fileName]);
            }

            $row = Product::create($request->all());
            if ($row) {
                $request->session()->flash('success', 'Product added successfully');
            } else {
                $request->session()->flash('error', 'Product addition failed');
            }
            return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data['row'] = Product::find($id);
        if(!$data['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('product.index');
        }
        return view('product.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Product::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('product.index');
        }
        return view('product.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data['row'] = Product::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('product.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Product updated Successfully');
        } else {
            $request->session()->flash('error', 'Product Update failed');

        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] = Product::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Product Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Product Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('product.index');
    }
}
