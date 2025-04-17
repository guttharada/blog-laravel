<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Laravel</title>
</head>

<!-- css -->
<link href="{{ asset('css/global.css') }}" rel="stylesheet" />
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet" />

<link href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/bootstrap-5.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- js -->
<script src="{{ asset('lib/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js') }}"></script>


<body>

    <!-- Main Header -->
    @include('navbar.nav')

    <!-- Body -->
    @yield('body')

    <!-- Footer -->
    @include('footer.footer')

</body>

</html>