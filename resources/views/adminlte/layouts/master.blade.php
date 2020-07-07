{{-- Start: HoaiPX 2020/07/05 --}}
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>PLANT STORE | @yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/style.css') }}">
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        @include('adminlte.includes.header')
        @include('adminlte.includes.sidebar')
        @yield('content')
        @include('adminlte.includes.footer')
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/script.js') }}"></script>
</body>

</html>
{{-- End: HoaiPX 2020/07/05 --}}
