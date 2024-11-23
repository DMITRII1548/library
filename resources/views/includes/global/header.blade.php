<header>
    <div class="logo"><img src="{{ asset('assets/imgs/header/logotip.png') }}" alt="Логотип"></div>
    <nav>
        <a href="../catalog/catalog.html">{{ __('messages.catalog') }}</a>
        <a href="">{{ __('messages.header.menu.about') }}</a>
        <a href="{{ route('users.books.index') }}">{{ __('messages.header.menu.my_books') }}</a>

        @guest
            <a href="{{ route('login', LaravelLocalization::setLocale()) }}">{{ __('messages.header.menu.login') }}</a>
            <a href="{{ route('register', LaravelLocalization::setLocale()) }}">{{ __('messages.header.menu.register') }}</a>
        @endguest

        @auth
            <form action="{{ route('logout', LaravelLocalization::setLocale() ?: 'ru') }}" method="POST">
                @csrf
                <button style="background: none; border: none;">{{ __('messages.header.menu.logout') }}</button>
            </form>
        @endauth


        <div class="selector_lung">
            <button><img src="{{ asset('assets/imgs/header/Group 62.svg') }}" alt="">  RU  <img src="{{ asset('assets/imgs/header/Vector 1.png') }}" alt=""></button>
        </div>
        <div class="switch_background">
            <button><img src="{{ asset('assets/imgs/header/sun.png') }}" alt=""></button>
        </div>
    </nav>
</header>
