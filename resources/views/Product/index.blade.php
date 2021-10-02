@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ProductManagement</h1>
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
                    <a href="{{route('product.create')}}" class="btn btn-primary">Add</a>

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
                            <th>SN</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        @foreach($data['rows'] as $i => $row)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->quantity}}</td>
                                <td>{{$row->price}}</td>
                                <td>
                                    <img src="{{asset('uploads/images/'.$row->image)}}"  height="100px" width="100px" alt="">
                                </td>
                                <td>{{$row->description}}</td>
                                <td>@if($row->status==1)
                                        <p style="color:green">Active</p>
                                    @else
                                        <p style="color:red">Deactive</p>
                                    @endif</td>
                                <td>

                                    <a href="{{route('product.show',$row->id)}}"  class='btn btn-success' style='font-size:24px'><li class="fas fa-eye"></li></a>
                                    <a href="{{route('product.edit',$row->id)}}" class='btn btn-primary' style='font-size:24px'><li class="fas fa-recycle"></li></a>

                                    <form action="{{route('product.destroy',$row->id)}}" method="post">
                                        <input type="hidden" name="_method" value="delete"/>
                                        @csrf
                                        <button class="btn btn-danger d-inline" type="submit" ><i class='fas fa-trash' style='font-size:24px'></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach


                    </table>





                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
