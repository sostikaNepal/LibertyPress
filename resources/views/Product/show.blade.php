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
                    <a href="{{route('customer.create')}}" class="btn btn-primary">Add</a>
                    <a href="{{route('customer.index')}}" class="btn btn-success">List</a>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{Session::get('success')}}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert alert-danger">{{Session::get('danger')}}</p>
                    @endif
                    <table class="table table-bordered">

                        <tr>
                            <th>Name</th>
                            <td>{{$data['row']->name}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                <img src="{{asset('uploads/images/'.$data['row']->image)}}"  height="100px" width="100px" alt="">
                            </td>
                        </tr>

                        <tr>
                            <th>Quantity</th>
                            <td>{{$data['row']->quantity}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$data['row']->price}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$data['row']->description}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if($data['row']->status==1)
                                    <p style="color:green">Active</p>
                                    @else
                                    <p style="color:red">Deactive</p>
                                    @endif

                            </td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>{{$data['row']->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Updated_at</th>
                            <td>{{$data['row']->updated_at}}</td>
                        </tr>


                        </tr>


                    </table>





                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
