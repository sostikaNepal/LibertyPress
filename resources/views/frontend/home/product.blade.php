@extends('frontend.layout.master')

@section('content')
    <div id="main">
        <div class="inner">
            <a name="homepage"></a>
            <!-- Header -->
            <header id="header">

                <h2>   <a href="index.html" class="logo"><strong>Liberty Press</strong>
                        Pvt.Ltd</a></h2>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                </ul>
            </header>


            <!-- Section -->
            <section>
                <header class="major">
                    <h2>Products</h2>
                    <a name="product"></a>
                </header>

                <div class="posts">
                    @foreach($data['rows'] as $i => $row)
                        <article>
                            <a href="{{route('frontend.payment',$row->id)}}" class="image">

                                <img src="{{asset('uploads/images/'.$row->image)}}" alt="">
                            </a>
                            <h3>{{$row->name}}</h3>
                            <p>{{$row->description}}</p>

                        </article>
                    @endforeach
                </div>

            </section>

        </div>
    </div>


@endsection