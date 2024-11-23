@extends('layouts.main')

@section('head')
    @vite(['resources/css/book/show.css'])
@endsection

@section('content')
    <div class="box">
        <img src="{{ $book->imageSrc }}" alt="" class="book_img">
        <div class="box_text">
            <h1>{{ $book->tilte }}</h1>
            <div class="author">
                <img src="{{ asset('assets/imgs/books/show/аватарка.png') }}" alt="">
                <p>{{ $book->author }}</p>
            </div>
            <div class="description">
                <p>{{ $book->description }}</p>
            </div>
            <div class="category">
                <p>
                    {{ __('messages.category') }}:<a href="#">{{ $book->category->title }}</a>
                </p>
            </div>
            <div class="buttons">
                <a href="{{ route('books.read', $book->id) }}" class="btn_read">{{ __('messages.read') }}</a>
                <div class="btn_like">
                    <label class="ui-like">
                        <input type="checkbox">
                        <div class="like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill=""><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path></g></svg>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection
