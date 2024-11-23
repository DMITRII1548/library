<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energo libary</title>
    @vite(['resources/css/header.css'])
    @yield('head')
</head>

<body>
    @include('includes.global.header')
    @yield('content')
    @yield('scripts')
    <script>
        {
            const switchLangMenu = document.getElementById('switchLangMenu')
            const langMenu = document.getElementById('lang-menu')

            switchLangMenu.onclick = () => {
                langMenu.classList.toggle('d-none')
            }            
        }
    </script>
</body>
</html>
