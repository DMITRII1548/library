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
        <div class="pole_register">
            <div class="title_register"><h1>{{ __('messages.register.title') }}</h1></div>
            <div class="pole">
                <form action="{{ route('register.store', LaravelLocalization::setLocale()) }}" method="POST">
                    @csrf
                    <div class="pole_name">
                        <label for="name_input">{{ __('messages.fields.name.label') }}</label><br>
                        <input name="name" class="name_input" type="text" placeholder="{{ __('messages.fields.name.placeholder') }}" required>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="pole_email">
                        <label for="input_email">{{ __('messages.fields.email.label') }}</label><br>
                        <input name="email" class="input_email" type="email" placeholder="example@1.mail.ru" required>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="pole_password">
                        <label for="input_password">{{ __('messages.fields.password.label') }}</label><br>
                        <input name="password" class="input_password" type="password" placeholder="password!231452" required>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="repeat_password">
                        <label for="input_repeat_password">{{  __('messages.fields.password.label') }}</label><br>
                        <input name="password_confirmation" class="input_repeat_password" type="password" placeholder="password!231452" required>
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="pole_proffesia">
                        <input name="role_id" type="radio" value="{{ $roles->where('title', 'teacher')->first()->id }}" class="teacher" required>
                        <label for="teacher">{{ __('messages.register.teacher') }}</label>
                        <input name="role_id" type="radio" value="{{ $roles->where('title', 'student')->first()->id }}" class="stydent" requ>
                        <label for="stydent">{{  __('messages.register.student') }}</label>
                    </div>
                    @error('role_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="button_register">{{ __('messages.register.btn') }}</button>
                </form>
            </div>
        </div>
        <div class="pole_login_background">
            <div class="pole_login">
                <div class="logotip"><a href="../glavna/index.html"><img src="{{ asset('assets/imgs/auth/logo.png') }}" alt=""></a></div>
                <div class="pole_info_login">
                    <h1>{{ __('messages.register.info.title') }}</h1>
                    <h2>{{ __('messages.register.info.description') }}</h2>
                </div>
                <div class="login">
                    <button class="button_login">{{ __('messages.register.info.btn') }}</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
