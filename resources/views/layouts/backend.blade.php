<!DOCTYPE html>
<html>
@include('includes.head')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    @include('includes.navbar')
    @include('includes.sidebar')
    @yield('content')
    @include('includes.footer')
</div>
<!-- ./wrapper -->
@include('includes.scripts')
@yield('js')
</body>
</html>
