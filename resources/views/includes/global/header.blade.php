<header>
    <div class="logo"><img src="{{ asset('assets/imgs/header/logotip.png') }}" alt="Логотип"></div>
    <nav>
        <a href="../catalog/catalog.html">{{ __('messages.catalog') }}</a>
        <a href="">{{ __('messages.header.menu.about') }}</a>
        <a href="../favourites/favourites.html">{{ __('messages.header.menu.my_books') }}</a>
        <a href="../login_and_register/login_and_register.html">{{ __('messages.header.menu.login') }}</a>
        <a href="../login_and_register/login_and_register.html">{{ __('messages.header.menu.register') }}</a>
        <div class="selector_lung">
            <button><img src="{{ asset('assets/imgs/header/Group 62.svg') }}" alt="">  RU  <img src="{{ asset('assets/imgs/header/Vector 1.png') }}" alt=""></button>
        </div>
        <div class="switch_background">
            <button><img src="{{ asset('assets/imgs/header/sun.png') }}" alt=""></button>
        </div>
    </nav>
</header>
