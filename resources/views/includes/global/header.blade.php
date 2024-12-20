<header>
    <div class="logo"><img src="{{ asset('assets/imgs/header/logotip.png') }}" alt="Логотип"></div>
    <nav>
        <a href="{{ route('books.index') }}">{{ __('messages.catalog') }}</a>
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
            <img class="icon_earth" src="{{ asset('assets/imgs/header/Group 62.svg') }}" alt="">
            <button class="language_name">{{ LaravelLocalization::setLocale() ?? 'RU' }} </button>
            <img class="icon_drop_down_language" src="./img/Vector 1.png" alt="">
            <div class="language_menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="language_item">
                            <a style="color: white" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                @endforeach
            </div>
        </div>
        {{-- <div class="selector_lung">
            <button id="switchLangMenu"><img src="{{ asset('assets/imgs/header/Group 62.svg') }}" alt="">  {{ LaravelLocalization::setLocale() ?? 'RU' }}  <img src="{{ asset('assets/imgs/header/Vector 1.png') }}" alt=""></button>
            <div class="language_menu d-none" id="lang-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <h3>
                        <a style="color: white" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </h3>
                @endforeach
            </div>
        </div> --}}
        <div class="switch_background">
            <button><img src="{{ asset('assets/imgs/header/sun.png') }}" alt=""></button>
        </div>
    </nav>
</header>


