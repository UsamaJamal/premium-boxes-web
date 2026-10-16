{{--
    Quote option dropdown with a "Not Sure" choice and a "Watch Video Guide" button.
    Usage: @include('web.components.quote-guide-select', ['type' => 'stock', 'name' => 'material'])
    Types: stock, color, coating. The button comes from web.components.quote-video-guide-button.
--}}
@php
    $quoteGuides = [
        'stock' => [
            'placeholder' => 'Select Paper Stock',
            'options' => [
                '12pt Cardboard Stock', '14pt Cardboard Stock', '16pt Cardboard Stock', '18pt Cardboard Stock',
                '20pt Cardboard Stock', '22pt Cardboard Stock', '24pt Cardboard Stock',
                'Kraft Stock', 'Recycled BuxBoard', 'Corrugated Stock',
            ],
        ],
        'color' => [
            'placeholder' => 'Select Color',
            'options' => ['1 color', '2 color', '3 color', '4 color', '4/1 color', '4/2 color', '4/3 color', '4/4 color'],
        ],
        'coating' => [
            'placeholder' => 'Select Paper Coating',
            'options' => ['Aqueous Coating', 'Semi Gloss', 'Gloss UV', 'Matte UV', 'Semi Matte'],
        ],
    ];
    $quoteGuide = $quoteGuides[$type];
@endphp
<select name="{{ $name }}" aria-label="{{ $quoteGuide['placeholder'] }}">
    <option value="" disabled selected hidden>{{ $quoteGuide['placeholder'] }}</option>
    <option value="Not Sure">Not Sure</option>
    @foreach($quoteGuide['options'] as $quoteGuideOption)
        <option value="{{ $quoteGuideOption }}">{{ $quoteGuideOption }}</option>
    @endforeach
</select>
@include('web.components.quote-video-guide-button', ['type' => $type])
