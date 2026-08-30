@props([
    'label' => 'Selected projects',
    'gutter' => 'narrow',
    'items' => [],
])
{{-- The ledger — the shape this whole template is built around. Three columns on desktop: the year, the thing, and what it was. On a phone the year and the note fold onto one quiet line underneath. A row with no link renders as plain text, so the same section serves an employment history and a list of outbound work. The block that follows your pointer down the rows lives in public/js/main.js. --}}
<section class="mt-20 sm:mt-24">
    <h2 class="text-[0.6875rem] font-medium tracking-[0.16em] text-faint uppercase">{{ $label }}</h2>

    @if ($gutter == 'wide')
    <ul role="list" data-glide class="mt-5 -mx-3 [--forge-gutter:7.5rem]">
    @else
    <ul role="list" data-glide class="mt-5 -mx-3 [--forge-gutter:4.5rem]">
    @endif
        @foreach ($items as $item)
        <li>
            @if ($item->url)
            <a href="{{ $item->url }}" data-glide-item class="group grid gap-x-5 rounded-lg px-3 py-2.5 sm:grid-cols-[var(--forge-gutter)_1fr_auto] sm:items-baseline">
                <span class="text-base tabular-nums text-faint max-sm:hidden sm:text-sm">{{ $item->year }}</span>
                <span class="inline-flex items-center gap-x-1 text-base text-ink group-hover:text-accent sm:text-[0.9375rem]">
                    {{ $item->title }}
                    <svg viewBox="0 0 16 16" class="arrow-nudge size-4 shrink-0 fill-faint group-hover:fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M4.22 11.78a.75.75 0 0 1 0-1.06L9.44 5.5H5.75a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 .75.75v5.5a.75.75 0 0 1-1.5 0V6.56l-5.22 5.22a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd"/></svg>
                </span>
                <span class="text-base text-faint max-sm:mt-0.5 sm:text-right sm:text-sm">
                    @if ($item->year)<span class="sm:hidden">{{ $item->year }} · </span>@endif
                    {{ $item->note }}
                </span>
            </a>
            @else
            <span class="grid gap-x-5 px-3 py-2.5 sm:grid-cols-[var(--forge-gutter)_1fr_auto] sm:items-baseline">
                <span class="text-base tabular-nums text-faint max-sm:hidden sm:text-sm">{{ $item->year }}</span>
                <span class="text-base text-ink sm:text-[0.9375rem]">{{ $item->title }}</span>
                <span class="text-base text-faint max-sm:mt-0.5 sm:text-right sm:text-sm">
                    @if ($item->year)<span class="sm:hidden">{{ $item->year }} · </span>@endif
                    {{ $item->note }}
                </span>
            </span>
            @endif
        </li>
        @endforeach
    </ul>
</section>
