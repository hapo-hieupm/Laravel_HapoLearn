<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('storage/images/cu.png') }}" rel="icon" sizes="16x16" type="image/gif">
    <title>@yield('title')</title>
</head>
<body>
    @include('index.header')
        @yield('content')
    @include('index.footer')
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
