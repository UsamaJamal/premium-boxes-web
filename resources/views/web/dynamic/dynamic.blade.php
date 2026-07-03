@include('web.header')

<style>
/* Dark Theme Base Styles for Dynamic Pages */
body {
    background-color: #121212;
    color: #f5f5f5;
    font-family: "Inter", sans-serif;
    line-height: 1.6;
    overflow-x: hidden;
}

.dynamic-hero {
    position: relative;
    width: 100%;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #1a1a1a;
    border-bottom: 1px solid #333;
    padding-top: 115px; /* Offset for fixed header */
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.dynamic-hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: 0;
}

.dynamic-hero-heading {
    position: relative;
    z-index: 1;
    font-size: 42px;
    font-weight: 800;
    color: #ffffff;
    text-transform: uppercase;
    text-align: center;
    font-family: "Outfit", sans-serif;
}

.dynamic-content-wrapper {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
    color: #c5c5c5;
    font-family: "Inter", sans-serif;
    line-height: 1.8;
}

.dynamic-content-wrapper h1,
.dynamic-content-wrapper h2,
.dynamic-content-wrapper h3,
.dynamic-content-wrapper h1 span,
.dynamic-content-wrapper h2 span,
.dynamic-content-wrapper h3 span {
    color: #f5c542 !important;
    margin-top: 40px;
    margin-bottom: 20px;
    font-family: "Outfit", sans-serif;
}

.dynamic-content-wrapper p,
.dynamic-content-wrapper span,
.dynamic-content-wrapper div,
.dynamic-content-wrapper li {
    color: #c5c5c5 !important;
    margin-bottom: 20px;
    font-size: 16px;
}

.dynamic-content-wrapper a,
.dynamic-content-wrapper a span {
    color: #5dade2 !important;
}
</style>

@php
    $noBannerPages = ['privacy-policy', 'term-and-services', 'return-policy'];
    $isNoBanner = in_array($meta['0']->page_url ?? '', $noBannerPages);
@endphp

@if(!$isNoBanner)
<div class="dynamic-hero" @if(!empty($meta['0']->image)) style="background-image: url('{{url('uploads/'.$meta['0']->image)}}');" @endif>
    <div class="dynamic-hero-overlay"></div>
    <h1 class="dynamic-hero-heading">{{ $meta['0']->page_title ?? 'Page Title' }}</h1>
</div>
@endif

<section class="dynamic-content-wrapper" @if($isNoBanner) style="padding-top: 150px;" @endif>
    <div class="container">
        @if($isNoBanner)
            <h1 style="color: #ffffff; font-size: 36px; font-weight: 700; margin-bottom: 30px; text-align: center; text-transform: uppercase;">{{ $meta['0']->page_title ?? 'Page Title' }}</h1>
        @endif
        <?php echo $meta['0']->long_desc; ?>
    </div>
</section>

@include('web.footer')
