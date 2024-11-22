@extends('layouts.main')

@section('head')
    @vite(['resources/css/home.css', 'resources/css/header.css'])
@endsection

@section('content')
    <section class="home_page">
        <div class="home_info_flex">
            <div class="home_info">
                <div class="home_text">
                    <h1>{{ __('messages.home.title') }}</h1>
                </div>
                <div class="home_text_min">
                    <p>{{ __('messages.home.description') }}</p>
                </div>
                <div class="button_catalog">
                    <a href="../catalog/catalog.html"><button>{{ __('messages.catalog') }}</button></a>
                </div>
            </div>
            <div class="home_img">
                <div class="icon_idea">
                    <img src="{{ asset('assets/imgs/home/idea icon') }}.png" alt="">
                </div>
                <div class="icon_medal">
                    <img src="{{ asset('assets/imgs/home/medal.png') }}" alt="">
                </div>
                <div class="icon_mishen">
                    <img src="{{ asset('assets/imgs/home/mishen.png') }}" alt="">
                </div>
                <img class="wallpaper" src="{{ asset('assets/imgs/home/homeimg.png') }}" alt="">
            </div>
        </div>
    </section>
@endsection
