{{-- @if($paginator->hasPages())
    @if($paginator->onFirstPage())
        <span class="previous-link-disabled">@lang('pagination.previous')</span>
        @else
        <a
            href="{{$paginator->previousPageUrl()}}"
            class="previous-link">@lang('pagination.previous')</a>
    @endif
    @if($paginator->hasMorePages())
        <a
            href="{{$paginator->nextPageUrl()}}"
            class="next-link">@lang('pagination.next')</a>
        @else
        <span class="next-link-disabled">@lang('pagination.next')</span>
    @endif
@endif --}}

@props(['posts'])

@if ($posts->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($posts->onFirstPage())
            <li class="disabled"><span>&laquo;</span></li>
        @else
            <li><a href="{{ $posts->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($posts->getUrlRange(1, min(10, $posts->lastPage())) as $page => $url)
            @if ($page == $posts->currentPage())
                <li class="active"><span>{{ $page }}</span></li>
            @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach

        {{-- Show "..." and last page link if not on last page --}}
        @if ($posts->currentPage() < $posts->lastPage())
            @if ($posts->lastPage() > 10)
                <li class="disabled"><span>...</span></li>
                <li><a href="{{ $posts->url($posts->lastPage()) }}">{{ $posts->lastPage() }}</a></li>
            @endif
        @endif

        {{-- Next Page Link --}}
        @if ($posts->hasMorePages())
            <li><a href="{{ $posts->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
    </ul>
@endif


