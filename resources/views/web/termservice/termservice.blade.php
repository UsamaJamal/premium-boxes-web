@include('web/header')

<div style="padding: 100px 20px; text-align: center; color: white;">
    <h1>Terms & Services</h1>
    @if(isset($term_condition) && count($term_condition) > 0)
        <div style="text-align: left; max-width: 1000px; margin: 0 auto;">{!! $term_condition[0]->description !!}</div>
    @else
        <p>Terms and Services content will go here.</p>
    @endif
</div>

@include('web/footer')
