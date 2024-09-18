<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plezo PoS Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/bootstrap-337.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/font-awsome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/style.css') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <div id="wrapper"><!-- #wrapper begin -->
        @extends('components.sidebar')
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/admin_assets/js/jquery-331.min.js') }}"></script>
<script src="{{ asset('assets/admin_assets/js/bootstrap-337.min.js') }}"></script>

</html>
