@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- رابط الصفحة السابقة --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() . '&' . http_build_query(request()->except('page')) }}" rel="prev">&laquo;</a></li>
            @endif

            {{-- روابط الصفحات --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url . '&' . http_build_query(request()->except('page')) }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- رابط الصفحة التالية --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() . '&' . http_build_query(request()->except('page')) }}" rel="next">&raquo;</a></li>
            @else
                <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>
    </nav>
@endif
