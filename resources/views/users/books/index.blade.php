@extends('layouts.main')

@section('head')
    @vite(['resources/css/user/book/index.css'])
@endsection

@section('content')
<main>
    <div class="title">
        <img src="{{ asset('assets/imgs/users/books/index/heart.png') }}" alt="">
        <h1>{{ __('messages.favorites') }}</h1>
    </div>
    <div class="favourite-books">
        @foreach($favoriteBooks as $book)
            <div class="book">
                <a href="{{ route('books.show', ['book' => $book->id]) }}" class="book-1">
                    <img src="{{ $book->imageSrc }}" alt="">
                    <h2>{{ $book->title }}</h2>
                    <p>{{ $book->author }}</p>
                </a>
            </div>
        @endforeach
    </div>

    <div class="added-by-you">
        <div class="books_added">
            <img src="{{ asset('assets/imgs/users/books/index/pen.png') }}" alt="">
            <h1>{{ __('messages.add_books') }}</h1>
        </div>
        <a href="../main_book/main_book.html" class="upload">{{ __('messages.load_book') }}</a>
    </div> 
    <div class="favourite-books">
        @foreach($addedBooks as $book)
            <div class="book">
                <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( app()->currentLocale(), 'books.show', ['book' => $book->id]) }}" class="book-1">
                    <img src="{{ $book->imageSrc }}" alt="">
                    <h2>{{ $book->title }}</h2>
                    <p>{{ $book->author }}</p>
                </a>
            </div>
        @endforeach
    </div>  
</main>
@endsection
