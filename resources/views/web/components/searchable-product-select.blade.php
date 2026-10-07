<?php
    $pickerId = isset($id) ? $id : ('quote-product-picker-' . uniqid());
    $pickerName = isset($name) ? $name : 'box_style';
    $pickerSelected = isset($selected) ? $selected : request('box_style', '');
    $pickerPlaceholder = isset($placeholder) ? $placeholder : 'Select Box Style';
    $pickerOptions = app(\App\Support\QuoteProductOptions::class)->all();
?>

<div class="quote-product-picker" data-quote-product-picker>
    <input type="hidden" name="{{ $pickerName }}" value="{{ $pickerSelected }}" class="quote-product-picker-value">
    <button type="button" class="quote-product-picker-trigger" aria-expanded="false" aria-controls="{{ $pickerId }}">
        <span class="quote-product-picker-label">{{ $pickerSelected !== '' ? $pickerSelected : $pickerPlaceholder }}</span>
        <span class="quote-product-picker-chevron" aria-hidden="true"></span>
    </button>
    <div class="quote-product-picker-menu" id="{{ $pickerId }}" hidden>
        <input type="search" class="quote-product-picker-search" placeholder="Search product..." autocomplete="off" aria-label="Search product">
        <div class="quote-product-picker-options" role="listbox">
            @if($pickerSelected !== '' && !in_array($pickerSelected, $pickerOptions, true))
                <button type="button" class="quote-product-picker-option is-selected" role="option" data-value="{{ $pickerSelected }}">{{ $pickerSelected }}</button>
            @endif
            @foreach($pickerOptions as $pickerOption)
                <button type="button" class="quote-product-picker-option{{ $pickerOption === $pickerSelected ? ' is-selected' : '' }}" role="option" data-value="{{ $pickerOption }}">{{ $pickerOption }}</button>
            @endforeach
            <p class="quote-product-picker-empty" hidden>No product found.</p>
        </div>
    </div>
</div>

@once
<style>
    .quote-product-picker { position: relative; width: 100%; min-width: 0; }
    .quote-product-picker-trigger { display: flex; align-items: center; justify-content: space-between; gap: 12px; width: 100%; min-height: 44px; padding: 10px 14px; border: 1px solid currentColor; border-radius: 6px; background: transparent; color: inherit; font: inherit; text-align: left; cursor: pointer; box-sizing: border-box; }
    .quote-product-picker-label { min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    .quote-product-picker-chevron { width: 9px; height: 9px; flex: 0 0 9px; border-right: 2px solid currentColor; border-bottom: 2px solid currentColor; transform: rotate(45deg) translateY(-3px); }
    .quote-product-picker-menu { position: absolute; z-index: 10000; top: calc(100% + 5px); left: 0; width: 100%; min-width: 250px; padding: 8px; border: 1px solid #d2a736; border-radius: 7px; background: #fff; box-shadow: 0 12px 24px rgba(0, 0, 0, .22); box-sizing: border-box; }
    .quote-product-picker-search { width: 100%; height: 40px; padding: 8px 11px; border: 1px solid #d2a736; border-radius: 5px; background: #fff; color: #222; font: inherit; box-sizing: border-box; outline: none; }
    .quote-product-picker-options { max-height: 250px; margin-top: 7px; overflow-y: auto; }
    .quote-product-picker-option { display: block; width: 100%; padding: 9px 11px; border: 0; border-radius: 4px; background: transparent; color: #222; font: inherit; text-align: left; cursor: pointer; }
    .quote-product-picker-option[hidden] { display: none; }
    .quote-product-picker-option:hover, .quote-product-picker-option:focus, .quote-product-picker-option.is-selected { background: #f5c542; color: #171717; outline: none; }
    .quote-product-picker-empty { margin: 0; padding: 11px; color: #666; font-size: 13px; }
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-quote-product-picker]').forEach(function (picker) {
        if (picker.dataset.ready) return;
        picker.dataset.ready = 'true';

        var trigger = picker.querySelector('.quote-product-picker-trigger');
        var label = picker.querySelector('.quote-product-picker-label');
        var menu = picker.querySelector('.quote-product-picker-menu');
        var search = picker.querySelector('.quote-product-picker-search');
        var value = picker.querySelector('.quote-product-picker-value');
        var options = Array.prototype.slice.call(picker.querySelectorAll('.quote-product-picker-option'));
        var empty = picker.querySelector('.quote-product-picker-empty');
        var form = picker.closest('form');

        function close() {
            menu.hidden = true;
            trigger.setAttribute('aria-expanded', 'false');
        }

        function filter() {
            var term = search.value.trim().toLowerCase();
            var visible = 0;

            options.forEach(function (option) {
                var show = option.textContent.toLowerCase().indexOf(term) !== -1;
                option.hidden = !show;
                if (show) visible++;
            });

            empty.hidden = visible !== 0;
        }

        trigger.addEventListener('click', function () {
            var opening = menu.hidden;
            document.querySelectorAll('.quote-product-picker-menu').forEach(function (other) {
                if (other !== menu) other.hidden = true;
            });
            menu.hidden = !opening;
            trigger.setAttribute('aria-expanded', opening ? 'true' : 'false');
            if (opening) {
                search.value = '';
                filter();
                search.focus();
            }
        });

        search.addEventListener('input', filter);

        options.forEach(function (option) {
            option.addEventListener('click', function () {
                value.value = option.getAttribute('data-value') || '';
                label.textContent = value.value;
                options.forEach(function (item) { item.classList.toggle('is-selected', item === option); });
                trigger.style.borderColor = '';
                close();
            });
        });

        if (form) {
            form.addEventListener('submit', function (event) {
                if (value.value.trim() !== '') return;

                event.preventDefault();
                event.stopImmediatePropagation();
                trigger.style.borderColor = '#d32f2f';
                trigger.focus();
                alert('Please select a Box Style from the list.');
            }, true);
        }

        document.addEventListener('click', function (event) {
            if (!picker.contains(event.target)) close();
        });
    });
});
</script>
@endonce
