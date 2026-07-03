@include('web.header')

<style>
body {
    background-color: #121212;
    color: #f5f5f5;
    font-family: "Inter", sans-serif;
    line-height: 1.6;
    overflow-x: hidden;
}

.policy-hero {
    position: relative;
    width: 100%;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #1a1a1a;
    border-bottom: 1px solid #333;
    padding-top: 115px; /* Offset for fixed header */
}

.policy-hero-heading {
    position: relative;
    z-index: 1;
    font-size: 42px;
    font-weight: 800;
    color: #ffffff;
    text-transform: uppercase;
    text-align: center;
    font-family: "Outfit", sans-serif;
}

.policy-content-wrapper {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
    color: #c5c5c5;
    font-family: "Inter", sans-serif;
    line-height: 1.8;
}

.policy-content-wrapper h1,
.policy-content-wrapper h2,
.policy-content-wrapper h3 {
    color: #f5c542;
    margin-top: 40px;
    margin-bottom: 20px;
    font-family: "Outfit", sans-serif;
}

.policy-content-wrapper p {
    margin-bottom: 20px;
    font-size: 16px;
}
</style>

<div class="policy-hero">
    <h1 class="policy-hero-heading">{{ $privacy_policy[0]->meta_title ?? 'Privacy Policy' }}</h1>
</div>

<section class="policy-content-wrapper">
    <div class="container">
        @if(isset($privacy_policy) && count($privacy_policy) > 0)
            {!! $privacy_policy[0]->description !!}
        @else
            <p>Privacy Policy content will go here.</p>
        @endif
    </div>
</section>

@include('web.footer')
