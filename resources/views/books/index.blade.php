@extends('layouts.main')

@section('head')
    @vite(['resources/css/book/index.css'])
@endsection

@section('content')
    <main>
        <div class="title">
            <img src="{{ asset('assets/imgs/books/index/🦆 icon _list select_.png') }}" alt="" class="burger">
            <h1>{{ __('messages.catalog') }}</h1>
        </div>
        <div class="menu">
            <div class="profession">
                <p>{{ __('messages.professions') }}</p>
            </div>
            <div class="profession-menu" id="switch-profession">
                <p>{{ __('messages.professions') }}</p>
                <img src="{{ asset('assets/imgs/books/index/Vector 2.png') }}" alt="">
            </div>
            <div class="variant_profession_menu d-none" id ="menu">
                @foreach ($categories as $category)
                    <a href="#"><h3>{{ $category->title }}</h3></a>
                @endforeach
            </div>
        </div>
        <div class="promo-books">
            @foreach ($books as $book)
                <div class="book">
                    <a href="{{ route('books.show', $book->id) }}" class="book-1">
                        <img src="{{ $book->imageSrc }}" alt="">
                        <h2>{{ $book->title }}</h2>
                        <p>{{ $book->author }}</p>
                    </a>
                </div>                
            @endforeach

        </div>
        {{ $books->links('vendor.pagination.default') }}
    </main>
@endsection

@section('scripts')

<script>
    document.getElementById('switch-profession').onclick = () => {
        document.getElementById('menu').classList.toggle('d-none')
    }
</script>

@endsection