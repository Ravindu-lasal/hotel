@if ($paginator->hasPages())
    <ul class="post-pagination list-unstyled justify-content-start">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span><i class="icon-right-arrow"></i></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}"><i class="icon-right-arrow"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}"><i class="icon-right-arrow2"></i></a></li>
        @else
            <li class="disabled"><span><i class="icon-right-arrow2"></i></span></li>
        @endif
    </ul>
@endif
