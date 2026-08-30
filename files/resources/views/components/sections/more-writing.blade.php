@props([
    'label' => 'More writing',
    'current' => '',
    'writings' => [],
])
{{-- Everything else worth reading. The essay you are on is filtered out by matching the current slug, so this list never links to the page it sits on. --}}
<section class="mt-20 border-t border-line pt-10 sm:mt-24">
    <h2 class="text-[0.6875rem] font-medium tracking-[0.16em] text-faint uppercase">{{ $label }}</h2>

    <ul role="list" data-glide class="mt-5 -mx-3">
        @foreach ($writings as $writing)
            @if ($writing->slug != $current)
            <li>
                <a href="{{ $writing->link }}" data-glide-item class="group flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 rounded-lg px-3 py-2.5">
                    <span class="font-display text-lg text-ink group-hover:text-accent sm:text-base">{{ $writing->title }}</span>
                    <span class="text-base tabular-nums text-faint sm:text-sm">{{ $writing->dateFormatted }}</span>
                </a>
            </li>
            @endif
        @endforeach
    </ul>
</section>
