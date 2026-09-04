/*
    Forge — the glide.

    One soft block per list that slides to whichever row the pointer is over,
    instead of every row lighting up on its own. It is the only piece of
    JavaScript on the site, and the only motion: there are no scroll reveals
    here, so nothing on the page depends on this file having loaded.

    Mark a container data-glide and its rows data-glide-item. Works for the nav
    and for every index list.

    Pages change in place: instant navigation swaps <main> and keeps the nav,
    so the nav's block lives for the whole visit while each new <main> gets
    its lists attached through setUp(root); the lists that left with the old
    <main> are forgotten, and the nav's block re-measures its row once the
    current link has moved.
*/
(function () {
    'use strict';

    /* Every attached list, so a resize can re-measure them all and a page
       change can let go of the ones that left with the previous <main>. */
    var tracks = [];

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

        tracks.push({
            track: track,
            /*
                A resize, or a page change that restyles the row under the
                pointer, changes the measurements. Re-measure the row still
                under the pointer rather than leaving the block stranded.
            */
            refresh: function () {
                if (current) moveTo(current);
            }
        });
    }

    function refreshAll() {
        for (var i = 0; i < tracks.length; i++) tracks[i].refresh();
    }

    window.addEventListener('resize', refreshAll);

    /*
        Everything inside `root` — the document on first load, the freshly
        swapped <main> after a navigation. Lists that already have a block
        (the persistent nav) are left alone.
    */
    function setUp(root) {
        tracks = tracks.filter(function (entry) {
            return document.contains(entry.track);
        });

        var found = root.querySelectorAll('[data-glide]');
        for (var i = 0; i < found.length; i++) {
            if (!found[i].classList.contains('glide-track')) attach(found[i]);
        }
    }

    setUp(document);

    document.addEventListener('instant:navigated', function (event) {
        setUp(event.detail.main);
        refreshAll();
    });
})();
