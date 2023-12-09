@if ($paginator->hasPages())
<div class="nav-container">
    <nav class="post-pagination">
        <ul class="pagination">
            {{-- <li class="pagination-first"><a href="#"> First </a></li> --}}
            @if ($paginator->onFirstPage())
                <li class="pagination-prev"><a rel="prev"></a></li>
            @else
                <li wire:click="previousPage" class="pagination-prev"><a rel="prev"></a></li>
            @endif
            {{-- <li class="pagination-num"><a href="#"> 1 </a></li>
            <li class="pagination-num current"><a href="#"> 2 </a></li>
            <li class="pagination-num"><a href="#"> 3 </a></li> --}}


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                {{-- @if (is_string($element))
                    <li class="pagination-num current"><a href="#"> {{$element}} </a></li>
                @endif --}}
    
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination-num current"><a href="#"> {{$page}} </a></li>
                        @else
                            <li class="pagination-num "><a href="#" wire:click="gotoPage({{ $page }})">{{ $page }} </a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach


            @if ($paginator->hasMorePages())
                <li wire:click="nextPage" class="pagination-next"><a rel="next"></a></li>
            @else
                <li class="pagination-next"><a rel="next"></a></li>
            @endif
            {{-- <li class="pagination-last"><a href="#"> Last </a> </li> --}}
        </ul>
    </nav>
</div>

@endif