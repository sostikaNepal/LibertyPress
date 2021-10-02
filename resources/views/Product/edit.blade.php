@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ route('product.update',$data['row']->id) }}" method="post">
                        <input type="hidden" name="_method" value="PUT"/>
                        @csrf
                        <div class="form_group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$data['row']->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="form_group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" id="quantity" value="{{$data['row']->quantity}}">
                            @error('quantity')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form_group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price" value="{{$data['row']->price}}">
                            @error('price')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form_group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control " id="description" >{{$data['row']->description}}</textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form_group">
                            <label for="status">Status</label>

                            @if ($data['row']->status== 1)
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="status" id="status" value="1" checked>Active
                                    <input type="radio" name="status" id="status" value="0" >Deactive
                                </div>

                            @else
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="status" id="status" value="1" >Active
                                    <input type="radio" name="status" id="status" value="0" checked >Deactive
                                </div>
                            @endif
                            @error('status')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form_group">

                            <input type="submit" class="btn btn-info" name="btnSave" id="btnSave" value="save">
                        </div>
                    </form>





                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
