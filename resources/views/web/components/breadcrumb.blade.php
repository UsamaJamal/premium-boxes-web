<nav class="global-breadcrumb {{ $class ?? '' }}" aria-label="Breadcrumb" @if(isset($style)) style="{{ $style }}" @endif>
    <a href="{{ url('/') }}/" class="gb-home" title="Home">
        <i class="fas fa-home"></i>
    </a>
    @if(isset($items))
        @foreach($items as $item)
            <span class="gb-sep"><i class="fas fa-chevron-right" style="font-size: 10px;"></i></span>
            @if(!$loop->last && isset($item['url']))
                <a href="{{ $item['url'] }}" class="gb-link">{{ $item['label'] }}</a>
            @else
                <span class="gb-current">{{ $item['label'] }}</span>
            @endif
        @endforeach
    @endif
</nav>
