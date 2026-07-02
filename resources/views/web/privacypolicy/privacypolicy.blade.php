@include('web/header')

<div style="padding: 100px 20px; text-align: center; color: white;">
    <h1>Privacy Policy</h1>
    @if(isset($privacy_policy) && count($privacy_policy) > 0)
        <div>{!! $privacy_policy[0]->description !!}</div>
    @else
        <p>Privacy Policy content will go here.</p>
    @endif
</div>

@include('web/footer')
