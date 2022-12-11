@if($paginator->hasPages())
    <p class="float-right">
        @if ($paginator->onFirstPage())
            <i class="fa fa-caret-left" style="position: relative; top: 3px; font-size: 24px; padding-right: 5px; color:#d6d6d6 !important;"></i>
        @else
            <a class="active my-active" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <i class="fa fa-caret-left" style="position: relative; top: 3px; font-size: 24px; padding-right: 5px; color:#666 !important;"></i>
            </a>
        @endif
        @foreach ($elements as $element)

            @if (is_string($element))
                <span class="disabled">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span >Page {{ $page }}</span></li>
                    @endif
                @endforeach
                of {{ $paginator->lastPage() }}
            @endif
        @endforeach
        @if ($paginator->currentPage() == $paginator->lastPage())
            <i  class="fa fa-caret-right" style="position: relative; top: 3px; font-size: 24px; padding-left: 5px; color:#d6d6d6 !important;"></i>
        @else
            <a class="active my-active" href="{{ $paginator->nextPageUrl() }}" rel="next">
                <i class="fa fa-caret-right" style="position: relative; top: 3px; font-size: 24px; padding-left: 5px; color:#666 !important;"></i>
            </a>
        @endif
    </p>
@endif
