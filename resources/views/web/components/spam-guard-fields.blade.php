{{--
    Anti-bot fields for the public forms. Include right after @csrf inside any
    <form> that posts to a route protected by the `spam.guard` middleware.

    @include('web.components.spam-guard-fields')                    honeypot + timing token
    @include('web.components.spam-guard-fields', ['captcha' => true]) also seeds the "a + b =" question;
        the form's JS reads data-a / data-b from the .fsg-token input and the
        visitor's answer must be posted as name="human_answer".
--}}
@php
    $fsg = !empty($captcha) ? \App\Support\SpamGuard::captcha() : ['token' => \App\Support\SpamGuard::token()];
@endphp
<input type="hidden" name="{{ \App\Support\SpamGuard::TOKEN_FIELD }}" class="fsg-token" value="{{ $fsg['token'] }}"@if(!empty($captcha)) data-a="{{ $fsg['a'] }}" data-b="{{ $fsg['b'] }}"@endif>
<div style="position:absolute;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden;" aria-hidden="true">
    <label>Leave this field empty <input type="text" name="{{ \App\Support\SpamGuard::HONEYPOT_FIELD }}" value="" tabindex="-1" autocomplete="off"></label>
</div>
<script>
/* Fetches a fresh anti-bot token (and captcha numbers) for a form after it was submitted. */
window.fsgRefresh = window.fsgRefresh || function (form, onNumbers) {
    if (!form) return;
    // Trailing slash: the site's TrailingSlashMiddleware 301s slash-less GETs, and a cached 301 would be stale.
    fetch('{{ url('spam-guard/token') }}/?captcha=' + (onNumbers ? 1 : 0), { headers: { 'X-Requested-With': 'XMLHttpRequest' }, credentials: 'same-origin' })
        .then(function (r) { return r.json(); })
        .then(function (d) {
            var t = form.querySelector('.fsg-token');
            if (t && d.token) { t.value = d.token; if (d.a) { t.dataset.a = d.a; t.dataset.b = d.b; } }
            if (onNumbers && d.a) onNumbers(Number(d.a), Number(d.b));
        })
        .catch(function () {});
};
</script>
