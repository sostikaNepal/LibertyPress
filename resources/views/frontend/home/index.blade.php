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

            <!-- Banner -->
            <section id="banner">
                <div class="content">

                    <p>Liberty Press Pvt.Ltd is located at Itahari-9,Sunsari.It has been operating its services from 2015.Krishna Adhikari is the owner of the organization.Liberty Press is basically a printing press where there is a services of printing books,copies,posters,etc.Yuh can contact us for further queries.</p>

                </div>
                <span class="image object">
										<img src="{{asset('frontend/images/organizationphoto.jpg')}}" alt="" />
                </span>
            </section>

            <!-- Section -->
            <section>
                <header class="major">
                    <h2>Our Services</h2>
                </header>
                <div class="features">
                    <article>
                        <span class="icon fa-gem"></span>
                        <div class="content">
                            <h3>Free Delivery</h3>
                            <p>We provide free delivery service for our valuable customers</p>
                        </div>
                    </article>
                    <article>
                        <span class="icon solid fa-paper-plane"></span>
                        <div class="content">
                            <h3>Best Quality</h3>
                            <p>We assure you to not compromise on quality and give customer satisfaction </p>
                        </div>
                    </article>
                    <article>
                        <span class="icon solid fa-rocket"></span>
                        <div class="content">
                            <h3>Affordable</h3>
                            <p>Our aim is to give products at reasonable price with best quality possible </p>
                        </div>
                    </article>
                    <article>
                        <span class="icon solid fa-signal"></span>
                        <div class="content">
                            <h3>Easy to Use</h3>
                            <p>We want to assure you all that our system is easy to use and implement </p>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Section -->
            <section>
                <header class="major">
                    <h2>Products</h2>
                    <a name="product"></a>
                </header>

                <div class="posts">
                    @foreach($data['rows'] as $i => $row)
                        <article>
                            <a href="#" class="image">

                                <img src="{{asset('uploads/images/'.$row->image)}}" alt="">
                            </a>
                            <h3>{{$row->name}}</h3>
                            <p>{{$row->description}}</p>
                            <ul class="actions">
                                <li><a href="{{route('frontend.payment',$row->id)}}" class="button">Buy Now</a></li>
                            </ul>
                        </article>
                    @endforeach
                </div>

            </section>

        </div>
    </div>


@endsection