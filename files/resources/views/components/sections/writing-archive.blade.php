@props([
    'writings' => [],
])
{{-- Every essay, newest first, with the year standing in the left gutter. The year only prints on the first entry of each year — set the year heading on that entry and leave it empty on the rest. It is the one layout on the site that steps outside the single column. --}}
<section class="mt-10 sm:mt-12">
    <ul role="list" data-glide class="-mx-3">
        @foreach ($writings as $writing)
        <li>
            <a href="{{ $writing->link }}" data-glide-item class="group grid gap-x-5 rounded-lg px-3 py-4 sm:grid-cols-[4.5rem_1fr] sm:items-baseline">
                <span class="text-base tabular-nums text-faint max-sm:hidden sm:text-sm">{{ $writing->yearLabel }}</span>
                <span>
                    <span class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1">
                        <span class="font-display text-lg text-ink group-hover:text-accent sm:text-base">{{ $writing->title }}</span>
                        <span class="text-base tabular-nums text-faint sm:text-sm">{{ $writing->dateFormatted }}</span>
                    </span>
                    <span class="mt-1.5 block max-w-[62ch] text-base text-pretty text-muted sm:text-sm">{{ $writing->description }}</span>
                </span>
            </a>
        </li>
        @endforeach
    </ul>
</section>
