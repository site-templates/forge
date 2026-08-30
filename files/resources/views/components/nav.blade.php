@props([
    'links' => [],
    'current' => '/',
    'avatar' => '/images/avatar.jpg',
    'avatarAlt' => 'Ezra Vance',
])
{{-- The whole site chrome: a portrait that goes home, and the links. The block behind the hovered link is the same one that follows your pointer down every list on the site — see public/js/main.js. Links come from resources/data/site.json (nav_links). --}}
<header id="top" class="flex flex-wrap items-center justify-between gap-x-4 gap-y-4">

    <a href="/" aria-label="Homepage" class="shrink-0">
        <img src="{{ $avatar }}" alt="{{ $avatarAlt }}" width="80" height="80" class="size-11 rounded-lg object-cover sm:size-10 outline-1 -outline-offset-1 outline-line hover:outline-faint">
    </a>

    <nav data-glide class="-mx-2 flex flex-wrap items-center" aria-label="Main">
        @foreach ($links as $link)
            @if ($link->url == $current)
            <a href="{{ $link->url }}" aria-current="page" data-glide-item class="rounded-lg px-2 py-2.5 text-base sm:py-1.5 text-ink underline decoration-faint decoration-1 underline-offset-[6px] sm:text-sm">{{ $link->text }}</a>
            @endif
            @if ($link->url != $current)
            <a href="{{ $link->url }}" data-glide-item class="rounded-lg px-2 py-2.5 text-base sm:py-1.5 text-faint hover:text-ink sm:text-sm">{{ $link->text }}</a>
            @endif
        @endforeach
    </nav>

</header>
