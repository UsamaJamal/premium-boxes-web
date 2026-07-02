@include('web/header')

<div style="padding: 100px 20px; text-align: center; color: white;">
    <h1>Return Policy</h1>
    @if(isset($return_page) && count($return_page) > 0)
        <div style="text-align: left; max-width: 1000px; margin: 0 auto;">{!! $return_page[0]->description !!}</div>
    @else
        <p>Return Policy content will go here.</p>
    @endif
</div>

@include('web/footer')
