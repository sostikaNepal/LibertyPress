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
                    <a href="{{route('product.index')}}" class="btn btn-success">List</a>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form_group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="form_group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" id="quantity" value="{{old('quantity')}}">
                            @error('quantity')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form_group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price" value="{{old('price')}}">
                            @error('price')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image_file" class="control-label">Image</label>
                            <input type="file" name="image_file" class="form-control" value="" id="image_file" >

                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form_group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control " id="description" value="description"></textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form_group">
                            <label for="status">Status</label>
                            <input type="radio" name="status" id="status" value="1">Active
                            <input type="radio" name="status" id="status" value="0" checked>Deactive

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
