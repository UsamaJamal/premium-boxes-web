<script>
/*
 * Site-wide form input guard (included from web/footer).
 * - Text fields: no leading spaces (so a field can't be "filled" with only spaces),
 *   and no double spaces in single-line fields.
 * - Email fields: no spaces at all.
 * - Selects: the empty "Select ..." placeholder option can't be picked again.
 */
(function () {
    var SKIP_TYPES = ['password', 'hidden', 'file', 'number', 'checkbox', 'radio', 'submit', 'button', 'reset', 'range', 'color', 'date', 'datetime-local', 'month', 'time', 'week'];

    function isGuarded(el) {
        if (!el || el.readOnly || el.disabled) return false;
        if (el.tagName === 'TEXTAREA') return true;
        return el.tagName === 'INPUT' && SKIP_TYPES.indexOf((el.type || 'text').toLowerCase()) === -1;
    }

    function cleanValue(el, value) {
        if (el.type === 'email') return value.replace(/\s+/g, '');
        if (el.tagName === 'TEXTAREA') return value.replace(/^\s+/, '');
        return value.replace(/^\s+/, '').replace(/\s{2,}/g, ' ');
    }

    function caretOf(el) {
        try { return el.selectionStart; } catch (e) { return null; }
    }

    document.addEventListener('keydown', function (event) {
        var el = event.target;
        if (event.key !== ' ' || !isGuarded(el)) return;
        if (el.type === 'email') { event.preventDefault(); return; }

        var pos = caretOf(el);
        if (pos === null || pos !== el.selectionEnd) return;
        var before = el.value.charAt(pos - 1);
        var after = el.value.charAt(pos);
        var singleLine = el.tagName !== 'TEXTAREA';
        if (pos === 0 || (singleLine && (/\s/.test(before) || /\s/.test(after)))) {
            event.preventDefault();
        }
    }, true);

    // Fallback for paste, autofill and mobile keyboards that don't report the key.
    document.addEventListener('input', function (event) {
        var el = event.target;
        if (!isGuarded(el)) return;

        var value = el.value;
        var cleaned = cleanValue(el, value);
        if (cleaned === value) return;

        var pos = caretOf(el);
        el.value = cleaned;
        if (pos !== null) {
            var newPos = cleanValue(el, value.slice(0, pos)).length;
            try { el.setSelectionRange(newPos, newPos); } catch (e) {}
        }
    }, true);

    // Trim trailing spaces before any form's own submit handler reads the values.
    document.addEventListener('submit', function (event) {
        var fields = event.target.querySelectorAll('input, textarea');
        Array.prototype.forEach.call(fields, function (el) {
            if (isGuarded(el) && el.value !== el.value.trim()) el.value = cleanValue(el, el.value).trim();
        });
    }, true);

    function lockSelectPlaceholders() {
        Array.prototype.forEach.call(document.querySelectorAll('select'), function (select) {
            var placeholder = select.options[0];
            if (!placeholder || placeholder.value !== '' || placeholder.dataset.guarded) return;
            placeholder.dataset.guarded = 'true';

            var showingPlaceholder = select.selectedIndex <= 0;
            placeholder.disabled = true;
            placeholder.hidden = true;
            if (showingPlaceholder) {
                placeholder.defaultSelected = true;
                placeholder.selected = true;
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', lockSelectPlaceholders);
    } else {
        lockSelectPlaceholders();
    }
})();
</script>
