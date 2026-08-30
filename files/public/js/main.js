/*
    Forge — the glide.

    One soft block per list that slides to whichever row the pointer is over,
    instead of every row lighting up on its own. It is the only piece of
    JavaScript on the site, and the only motion: there are no scroll reveals
    here, so nothing on the page depends on this file having loaded.

    Mark a container data-glide and its rows data-glide-item. Works for the nav
    and for every index list.
*/
(function () {
    'use strict';

    function attach(track) {
        var block = document.createElement('div');
        block.className = 'glide-block';
        block.setAttribute('aria-hidden', 'true');
        track.classList.add('glide-track');
        track.insertBefore(block, track.firstChild);

        var current = null;

        function moveTo(item) {
            if (!item) return;
            current = item;

            var t = track.getBoundingClientRect();
            var r = item.getBoundingClientRect();

            block.style.setProperty('--glide-x', Math.round(r.left - t.left) + 'px');
            block.style.setProperty('--glide-y', Math.round(r.top - t.top) + 'px');
            block.style.setProperty('--glide-w', Math.round(r.width) + 'px');
            block.style.setProperty('--glide-h', Math.round(r.height) + 'px');

            track.setAttribute('data-glide-active', '');
        }

        function clear() {
            current = null;
            track.removeAttribute('data-glide-active');
        }

        track.addEventListener('pointerover', function (event) {
            var item = event.target.closest('[data-glide-item]');
            if (item && track.contains(item)) moveTo(item);
        });

        track.addEventListener('pointerleave', clear);

        /*
            Keyboard users get the block too — it follows focus the same way it
            follows the pointer, so tabbing through a list reads identically.
        */
        track.addEventListener('focusin', function (event) {
            var item = event.target.closest('[data-glide-item]');
            if (item && track.contains(item)) moveTo(item);
        });

        track.addEventListener('focusout', function (event) {
            if (!track.contains(event.relatedTarget)) clear();
        });

        /*
            A resize changes every measurement. Re-measure the row still under
            the pointer rather than leaving the block stranded at its old size.
        */
        window.addEventListener('resize', function () {
            if (current) moveTo(current);
        });
    }

    function init() {
        var tracks = document.querySelectorAll('[data-glide]');
        for (var i = 0; i < tracks.length; i++) attach(tracks[i]);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
