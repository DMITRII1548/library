<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energo libary</title>
    @yield('head')
</head>

<body>
    @include('includes.global.header')
    @yield('content')
    @yield('scripts')
</body>
</html>
