{{--
    "Watch Video Guide" button. Usage: @include('web.components.quote-video-guide-button', ['type' => 'color'])
    Types: stock, color, coating. The popup lives in web.components.video-guide-modal (loaded by the footer).
--}}
@php
    $videoGuides = [
        'stock' => ['video' => 'paper-stock', 'title' => 'Paper Stock Guide'],
        'color' => ['video' => 'colors', 'title' => 'Color Guide'],
        'coating' => ['video' => 'paper-coating', 'title' => 'Paper Coating Guide'],
    ];
    $videoGuide = $videoGuides[$type];
@endphp
<button type="button" class="quote-video-guide-btn"
        data-video-guide="{{ asset('uploads/video-guides/' . $videoGuide['video'] . '.mp4') }}"
        data-video-poster="{{ asset('uploads/video-guides/' . $videoGuide['video'] . '.webp') }}"
        data-video-title="{{ $videoGuide['title'] }}">
    <span class="quote-video-guide-icon" aria-hidden="true"></span>
    <span class="quote-video-guide-text">Watch Video Guide</span>
</button>
