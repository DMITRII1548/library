<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>energo_libary</title>
    @vite(['resources/css/auth/register.css'])
</head>
<body>
    <div class="pole_and_register_and_login">
        <div class="pole_login_background">
            <div class="pole_login">
                <div class="logotip"><a href="../glavna/index.html"><img src="./Без имени-1 4.png" alt=""></a></div>
                <div class="pole_info_login">
                    <h1>{{ __('messages.login.info.title')  }}</h1>
                    <h2>{{ __('messages.login.info.description')  }}</h2>
                </div>
                <div class="login">
                    <a href="{{ route('register', LaravelLocalization::setLocale()) }}"><button class="button_login">{{ __('messages.login.info.btn')  }}</button></a>
                </div>
            </div>
        </div>
        <div class="pole_register">
            <div class="title_register"><h1>{{ __('messages.login.title') }}</h1></div>
            <div class="pole">
                <form action="{{ route('login.store', LaravelLocalization::setLocale()) }}" method="POST">
                    @csrf
                    <div class="pole_email">
                        <label for="input_email">{{ __('messages.fields.email.label') }}</label><br>
                        <input name="email" class="input_email" type="email" placeholder="example@1.mail.ru">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="pole_password">
                        <label for="input_password">{{ __('messages.fields.password.label') }}</label><br>
                        <input name="password" class="input_password" type="password" placeholder="password!231452">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="button_register">{{ __('messages.login.btn') }}</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
