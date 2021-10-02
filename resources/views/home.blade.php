@extends('layouts.backend')
@section('title','Dashboard Page')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$data['customer']}}</h3>

                        <p>No of customers</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('customer.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$data['product']}}</h3>

                        <p>No of products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{--<div class="col-lg-3 col-6">--}}
                {{--<!-- small box -->--}}
                {{--<div class="small-box bg-success">--}}
                    {{--<div class="inner">--}}
                        {{--<h3>{{$data['order']}}</h3>--}}

                        {{--<p>No of orders</p>--}}
                    {{--</div>--}}
                    {{--<div class="icon">--}}
                        {{--<i class="ion ion-person-add"></i>--}}
                    {{--</div>--}}
                    {{--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Default box -->--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                    {{--<h3 class="card-title">{{$data['customers']}}</h3>--}}
                    {{--<div class="card-tools">--}}
                        {{--<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">--}}
                            {{--<i class="fas fa-minus"></i></button>--}}
                        {{--<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">--}}
                            {{--<i class="fas fa-times"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="card-body">--}}
                    {{--Start creating your amazing application!--}}
                {{--</div>--}}
                {{--<!-- /.card-body -->--}}
                {{--<div class="card-footer">--}}
                    {{--Footer--}}
                {{--</div>--}}
                {{--<!-- /.card-footer-->--}}
            {{--</div>--}}
            {{--<!-- /.card -->--}}

            <div class="dataTable" id="tables">
                <table id="datatable" class="table table-striped" style="width: 40%">
                    <tr>
                        <th>Total number of customers</th>
                        <td>#</td>
                    </tr>
                    <tr>
                        <th>Total number of orders</th>
                        <td>#</td>
                    </tr>
                    <tr>
                        <th>Total number of products</th>
                        <td>#</td>
                    </tr>

                </table>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('css')
@endsection

@section('js')
@endsection

