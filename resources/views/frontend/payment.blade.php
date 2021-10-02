<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Hello</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}" />
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <header id="header">
               <h2> <a href="index.html" class="logo"><strong>Liberty Press</strong> Pvt.Ltd</a></h2>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                </ul>
            </header>

            <!-- Content -->
            <section>
                <header class="main">
                    <a name="product"></a>
                    <h1>{{$data['row']->name}}</h1>
                </header>

                <span class="image main">
                   <img src="{{asset('uploads/images/'.$data['row']->image)}}"  alt=""></span>

                <p>{{$data['row']->description}}</p>

                <div class="container-fluid px-1 py-5 mx-auto">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                            <h2>Buy here</h2>

                            <div class="card">
                                <form action="" method="post">
                                    <table>
                                        <tr>
                                        <th>Name</th>
                                        <td>
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" value="{{auth()->user()->name}}" >
                                    </div>
                                        </td>
                                        </tr>

                                        <tr>
                                        <th>Email</th>
                                        <th>
                                            <div class="form-group">
                                                <input type="email" id="email" name="email" class="form-control" value="{{auth()->user()->email}}" >
                                            </div>
                                        </th>
                                        </tr>

                                        <tr>
                                            <th>Phone</th>
                                            <th>
                                                <div class="form-group">
                                                    <input type="numberber" id="phone" name="phone" class="form-control"  >
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Address</th>
                                            <th>
                                                <div class="form-group">
                                                    <input type="text" id="address" name="address" class="form-control"  >
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Producy Name</th>
                                            <th>
                                                <div class="form-group">
                                                    <input type="text" id="product" name="product" class="form-control"  >
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Description</th>
                                            <th>
                                                <div class="form-group">
                                                    <input type="text" id="description" name="description" class="form-control"  >
                                                </div>
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Quantity</th>
                                            <th>
                                                <div class="form-group">
                                                    <input type="text" id="quantity" name="quantity" class="form-control"  >
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Rate</th>
                                            <th>
                                                <div class="form-group">
                                                    <input type="number" id="price" name="price" value="100" class="form-control"  >
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Taotal</th>
                                            <th>
                                                <div class="form-group">
                                                    <input type="text" id="total" name="total" class="form-control"  >
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
            <section>
                <header class="major">
                    <a name="contact"></a>
                    <h2>Get in touch</h2>
                </header>
                <p>Feel free for any Queries.You can send us your queries and contact us using the gmail and phone number provided. </p>
                <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">libertypress@gmail.com</a></li>
                    <li class="icon solid fa-phone">(+977) 9806756453</li>
                    <li class="icon solid fa-home">Ithari-9, Sunsari</li>
                </ul>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <p class="copyright">&copy; 2021 &copy; All rights reserved. </p>
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

<script>
    $(document).ready(function (){
        $('select').on('change', function() {
            var value = this.value;
            document.getElementById("car_id").value = value;
            alert(document.getElementsByName("total").id);
        });


    });

</script>
</body>
</html>