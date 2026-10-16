<style>
    /* "Watch Video Guide" button rendered by web.components.quote-guide-select */
    .quote-video-guide-btn {
        display: inline-flex;
        align-items: center;
        align-self: flex-start;
        gap: 8px;
        margin: 8px 0 0;
        padding: 0;
        border: 0;
        background: transparent;
        color: #f5c542;
        font: inherit;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.2;
        cursor: pointer;
    }
    .quote-video-guide-text {
        text-decoration: underline;
        text-underline-offset: 3px;
    }
    .quote-video-guide-icon {
        position: relative;
        flex: 0 0 20px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #f5c542;
    }
    .quote-video-guide-icon::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 54%;
        transform: translate(-50%, -50%);
        border-style: solid;
        border-width: 5px 0 5px 8px;
        border-color: transparent transparent transparent #111;
    }
    .quote-video-guide-btn:hover .quote-video-guide-text,
    .quote-video-guide-btn:focus-visible .quote-video-guide-text {
        color: #ffd86b;
    }
    .quote-video-guide-btn:focus,
    .quote-video-guide-btn:active,
    .quote-video-guide-btn:focus-visible {
        outline: none !important;
        box-shadow: none !important;
        border: 0 !important;
    }

    .video-guide-modal[hidden] { display: none; }
    .video-guide-modal {
        position: fixed;
        inset: 0;
        z-index: 100000;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 16px;
        background: rgba(0, 0, 0, 0.82);
    }
    .video-guide-dialog {
        position: relative;
        width: min(860px, 100%);
        padding: 16px;
        border: 1px solid #3b3b3b;
        border-radius: 12px;
        background: #141414;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
        box-sizing: border-box;
    }
    .video-guide-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 12px;
    }
    .video-guide-title {
        margin: 0;
        color: #fff;
        font-size: 17px;
        font-weight: 700;
    }
    .video-guide-close {
        flex: 0 0 36px;
        width: 36px;
        height: 36px;
        border: 1px solid #3b3b3b;
        border-radius: 50%;
        background: #1f1f1f;
        color: #fff;
        font-size: 22px;
        line-height: 1;
        cursor: pointer;
    }
    .video-guide-close:hover,
    .video-guide-close:focus,
    .video-guide-close:focus-visible {
        border-color: #f5c542;
        color: #f5c542;
        outline: none !important;
        box-shadow: none !important;
    }
    .video-guide-player {
        display: block;
        width: 100%;
        max-height: 75vh;
        border-radius: 8px;
        background: #000;
    }
</style>
<script>
(function () {
    var modal, player, title, closeBtn, lastTrigger;

    function build() {
        modal = document.createElement('div');
        modal.className = 'video-guide-modal';
        modal.hidden = true;
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('aria-labelledby', 'videoGuideTitle');
        modal.innerHTML =
            '<div class="video-guide-dialog">' +
                '<div class="video-guide-header">' +
                    '<h3 class="video-guide-title" id="videoGuideTitle"></h3>' +
                    '<button type="button" class="video-guide-close" aria-label="Close video">&times;</button>' +
                '</div>' +
                '<video class="video-guide-player" controls playsinline preload="none"></video>' +
            '</div>';
        document.body.appendChild(modal);

        player = modal.querySelector('.video-guide-player');
        title = modal.querySelector('.video-guide-title');
        closeBtn = modal.querySelector('.video-guide-close');

        closeBtn.addEventListener('click', close);
        modal.addEventListener('click', function (event) {
            if (event.target === modal) close();
        });
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && !modal.hidden) close();
        });
    }

    function open(trigger) {
        if (!modal) build();
        lastTrigger = trigger;
        title.textContent = trigger.getAttribute('data-video-title') || 'Video Guide';
        player.poster = trigger.getAttribute('data-video-poster') || '';
        player.src = trigger.getAttribute('data-video-guide');
        modal.hidden = false;
        document.body.style.overflow = 'hidden';
        closeBtn.focus();
        var playing = player.play();
        if (playing && playing.catch) playing.catch(function () {});
    }

    function close() {
        player.pause();
        player.removeAttribute('src');
        player.load();
        modal.hidden = true;
        document.body.style.overflow = '';
        if (lastTrigger) lastTrigger.focus();
    }

    document.addEventListener('click', function (event) {
        var trigger = event.target.closest ? event.target.closest('[data-video-guide]') : null;
        if (!trigger) return;
        event.preventDefault();
        open(trigger);
    });
})();
</script>
