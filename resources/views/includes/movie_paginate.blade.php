@if ($paginator->hasPages())
<div class="pages">
    <div class="modulepager">
        <ul class="pagination">
            @if (!$paginator->onFirstPage())
                <li class="PagerOtherPageCells"><a class="ModulePager FirstPage"
                        href="{{ $paginator->toArray()['first_page_url'] }}" title="Trang đầu tiên">«</a>
                </li>
                <li class="PagerOtherPageCells"><a class="ModulePager BackPage"
                        href="{{ $paginator->previousPageUrl() }}" title="Quay lại trang trước">‹</a>
            @endif
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="PagerCurrentPageCell active"><span class="SelectedPage"
                                    title="Đến trang {{ $page }}">{{ $page }}</span>
                            </li>
                        @else
                            <li class="PagerOtherPageCells"><a class="ModulePager" href="{{ $url }}"
                                    title="Đến trang {{ $page }}">{{ $page }}</a> </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="PagerOtherPageCells"><a class="ModulePager NextPage"
                        href="{{ $paginator->nextPageUrl() }}" title="Chuyển đến trang tiếp theo">›</a>
                </li>
            @endif
            <li class="PagerOtherPageCells"><a class="ModulePager LastPage"
                    href="{{ $paginator->toArray()['last_page_url'] }}" title="Trang cuối">»</a> </li>
        </ul>
    </div>
</div>
@endif
