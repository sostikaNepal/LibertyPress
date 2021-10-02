<!DOCTYPE HTML>

<html>
<head>
    <title>Liberty Press</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css')
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
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

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
            <section id="search" class="alt">
                <form method="post" action="#">
                    <input type="text" name="query" id="query" placeholder="Search" />
                </form>
            </section>

            <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href="#homepage">Homepage</a></li>
                    <li><a href="#product">Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                        </a></li>
                </ul>
            </nav>

            <!-- Section -->
            {{--<section>--}}
                {{--<header class="major">--}}
                    {{--<h2>Ante interdum</h2>--}}
                {{--</header>--}}
                {{--<div class="mini-posts">--}}
                    {{--<article>--}}
                        {{--<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>--}}
                        {{--<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>--}}
                    {{--</article>--}}
                    {{--<article>--}}
                        {{--<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>--}}
                        {{--<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>--}}
                    {{--</article>--}}
                    {{--<article>--}}
                        {{--<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>--}}
                        {{--<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<ul class="actions">--}}
                    {{--<li><a href="#" class="button">More</a></li>--}}
                {{--</ul>--}}
            {{--</section>--}}

            <!-- Section -->
            <section>
                <header class="major">
                    <a name="contact"></a>
                    <h2>Get in touch</h2>
                </header>
                <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">libertypress@gmail.com</a></li>
                    <li class="icon solid fa-phone">(+977) 9806756453</li>
                    <li class="icon solid fa-home">Ithari-9, Sunsari
                       </li>
                </ul>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <p class="copyright"> 2021 &copy; All rights reserved.
                </p>

            </footer>

        </div>
    </div>

</div>

<!-- Scripts -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/browser.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/util.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>
</html>