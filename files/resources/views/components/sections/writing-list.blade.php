@props([
    'label' => 'Recent writing',
    'linkText' => 'All writing',
    'link' => '/writing',
    'writings' => [],
])
{{-- The three most recent essays. Titles are set in the serif, which is how every writing surface on this site tells itself apart from the work ledger above it. --}}
<section class="mt-20 sm:mt-24">
    <h2 class="text-[0.6875rem] font-medium tracking-[0.16em] text-faint uppercase">{{ $label }}</h2>

    <ul role="list" data-glide class="mt-5 -mx-3">
        @foreach ($writings as $writing)
            @if ($loop->index < 3)
            <li>
                <a href="{{ $writing->link }}" data-glide-item class="group flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 rounded-lg px-3 py-2.5">
                    <span class="font-display text-lg text-ink group-hover:text-accent sm:text-base">{{ $writing->title }}</span>
                    <span class="text-base tabular-nums text-faint sm:text-sm">{{ $writing->dateFormatted }}</span>
                </a>
            </li>
            @endif
        @endforeach
    </ul>

    @if ($linkText)
    <a href="{{ $link }}" class="group mt-3 ml-3 inline-flex items-center gap-x-1 py-2.5 text-base text-muted hover:text-accent sm:text-sm">
        {{ $linkText }}
        <svg viewBox="0 0 16 16" class="arrow-nudge size-4 shrink-0 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M4.22 11.78a.75.75 0 0 1 0-1.06L9.44 5.5H5.75a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 .75.75v5.5a.75.75 0 0 1-1.5 0V6.56l-5.22 5.22a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd"/></svg>
    </a>
    @endif
</section>
