@if ($paginator->hasPages())
    <nav class="container">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled ml-auto mr-1" aria-disabled="true" 
                aria-label="@lang('pagination.previous')">
                    <span class="page-link"><i class="fa fa-long-arrow-left"></i></span>
                </li>
            @else
                <li class="page-item ml-auto mr-1">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" 
                        aria-label="@lang('pagination.previous')">
                        <span class="page-link"><i class="fa fa-long-arrow-left"></i></span>
                        </i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled mx-1" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active mx-1" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item mx-1"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item ml-1 mr-3">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" 
                        aria-label="@lang('pagination.next')">
                        <span class="page-link"><i class="fa fa-long-arrow-right"></i></span>
                    </a>
                </li>
            @else
                <li class="page-item disabled ml-1 mr-3" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link"><i class="fa fa-long-arrow-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
