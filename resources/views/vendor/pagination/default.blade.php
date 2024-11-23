@if ($paginator->hasPages())
    <div class="swipe_page" load="lazy">
        <div class="page">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <a href="#" class="back"><img src="{{ asset('assets/imgs/books/index/Group 7.png') }}" alt=""> {{ __('messages.back') }}</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="back"><img src="{{ asset('assets/imgs/books/index/Group 7.png') }}" alt=""> {{ __('messages.back') }}</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <a>{{ $element }}</a>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a>{{ $page }}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="next">{{ __('messages.next') }}<img src="{{ asset('assets/imgs/books/index/Group 6.png') }}" alt=""></a>
            @else
            <a href="#" class="next">{{ __('messages.next') }}<img src="{{ asset('assets/imgs/books/index/Group 6.png') }}" alt=""></a>
            @endif
        </div>

        
    </div>
@endif
