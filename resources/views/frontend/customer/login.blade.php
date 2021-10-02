

@extends('frontend.layout.master')

@section('content')

    <div class="container-fluid px-1 py-5 mx-auto">

        <div class="row d-flex justify-content-center">

            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                <h2>Log In</h2>

                <div class="card">
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{Session::get('success')}}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert alert-danger">{{Session::get('error')}}</p>
                    @endif
                    <form action="{{route('customer.login')}}" method="post">
                        @csrf
                        <table>
                            <tr>
                                <th>Email</th>
                                <td>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" >
                                    </div>
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Password</th>
                                <th>
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    @error('password')
                                    {{$message}}
                                    @enderror
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="submit" class="btn btn-success" id="submit" name="submit">

                                </td>

                            </tr>
                            Not registered yet? Click <a href="{{route('customer.register')}}">here</a> to register.


                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection