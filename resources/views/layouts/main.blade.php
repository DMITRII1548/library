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
            const languageName = document.querySelector('.language_name');
            const languageMenu = document.querySelector('.language_menu');
            const languageItem = document.querySelectorAll('.language_item');


            languageName.addEventListener('click', () => {
                languageMenu.style.display = (languageMenu.style.display === 'none' || languageMenu.style.display === '') ? 'block' : 'none';
            });

            languageItem.forEach(item => {
                item.addEventListener('click', () =>{
                    languageName.textContent = item.textContent;
                    languageMenu.style.display = 'none';
                })
            });

            window.addEventListener('click', (e) => {
                if(!e.target.closest('.language_name')){
                    languageMenu.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
