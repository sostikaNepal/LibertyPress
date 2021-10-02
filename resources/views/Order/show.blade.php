@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Order Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Order</li>
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
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{Session::get('success')}}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert alert-danger">{{Session::get('danger')}}</p>
                    @endif
                    <table class="table table-bordered">

                        <tr>
                            <th>Date</th>
                            <td>{{$data['row']->date}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data['row']->status}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data['row']->phone}}</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>{{$data['row']->password}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$data['row']->address}}</td>
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
