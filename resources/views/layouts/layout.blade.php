<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CRUD Test</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('storage/images/cu.png') }}" rel="icon" sizes="16x16" type="image/gif">
    <title>Hapo Learn</title>
</head>
<body>
    @include('layouts.header')
        @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
