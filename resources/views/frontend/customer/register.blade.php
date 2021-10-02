
@extends('frontend.layout.master')

@section('content')
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h2>Register</h2>

                <div class="card">
                    <form action="{{route('customer.store')}}" method="post">
                        @csrf
                        <table>
                            <tr>
                                <th>Name</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <th>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control"  >
                                    </div>
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </th>
                            </tr>

                            <tr>
                                <th>Password</th>
                                <th>
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                </th>
                                @error('password')
                                {{$message}}
                                @enderror
                            </tr>

                            <tr>
                                <th>Confirm Password</th>
                                <th>
                                    <div class="form-group">
                                        <input type="password" id="cpassword" name="cpassword" class="form-control">
                                    </div>
                                    @error('cpassword')
                                    {{$message}}
                                    @enderror
                                </th>
                            </tr>



                            <tr>
                                <th>Phone</th>
                                <th>
                                    <div class="form-group">
                                        <input type="number" id="phone" name="phone" class="form-control"  >
                                    </div>
                                    @error('phone')
                                    {{$message}}
                                    @enderror
                                </th>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <th>
                                    <div class="form-group">
                                        <input type="text" id="address" name="address" class="form-control"  >
                                        @error('address')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </th>
                            </tr>



                            <tr>
                                <th>
                                    <input type="submit" value="submit" class="btn btn-success" id="submit" name="submit">
                                </th>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection