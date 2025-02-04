<div class="myui-top-movies {{ $loop->even ? 'even' : 'odd' }}">
    <div class="myui-block-header">
        <h2 class="myui-block-title">{{ $item['label'] }}</h2>
        <a class="more text-muted icon-btn" href="{{ $item['link'] }}">
            Xem thêm
            <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" fill="#fff" />
            </svg>
        </a>
    </div>
    <ul class="myui-vodlist clearfix">
        @foreach ($item['data'] as $key => $movie)
            @php
                $xClass = 'item';
                if ($key === 0 || $key % 4 === 0) {
                    $xClass .= ' no-margin-left';
                }
            @endphp
            @include('themes::themeanimevsub.inc.sections_movies_item')
        @endforeach
    </ul>
</div>
