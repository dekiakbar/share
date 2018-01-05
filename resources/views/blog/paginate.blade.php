@if ($paginator->hasPages())
    <div class="ui pagination menu">
        @if ($paginator->onFirstPage())
            <a class="icon item disabled"> <i class="left chevron icon"></i> </a>
        @else
            <a class="icon item" href="{{ $paginator->previousPageUrl() }}" rel="prev"> <i class="left chevron icon"></i> </a>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <a class="icon item disabled">{{ $element }}</a>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="disabled item" >{{ $page }}</a>
                    @else
                        <a class="item" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a class="icon item" href="{{ $paginator->nextPageUrl() }}" rel="next"> <i class="right chevron icon"></i> </a>
        @else
            <a class="icon item disabled"> <i class="right chevron icon"></i> </a>
        @endif
    </div>
@endif
