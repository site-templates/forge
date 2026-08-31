@props([
    'label' => 'Elsewhere',
    'links' => [],
])
{{-- Where to find this person off the site. Rows come from resources/data/site.json (elsewhere), so the footer of every page and the About page stay in step. --}}
<section class="mt-20 sm:mt-24">
    <h2 class="text-[0.6875rem] font-medium tracking-[0.16em] text-faint uppercase">{{ $label }}</h2>

    <ul role="list" data-glide class="mt-5 -mx-3">
        @foreach ($links as $link)
        <li>
            <a href="{{ $link->url }}" target="_blank" rel="noopener" data-glide-item class="group grid gap-x-5 rounded-lg px-3 py-2.5 sm:grid-cols-[4.5rem_1fr] sm:items-baseline">
                <span class="text-base text-faint max-sm:hidden sm:text-sm">{{ $link->label }}</span>
                <span class="inline-flex items-center gap-x-1 text-base text-ink group-hover:text-accent sm:text-[0.9375rem]">
                    {{ $link->handle }}
                    <svg viewBox="0 0 16 16" class="arrow-nudge size-4 shrink-0 fill-faint group-hover:fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M4.22 11.78a.75.75 0 0 1 0-1.06L9.44 5.5H5.75a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 .75.75v5.5a.75.75 0 0 1-1.5 0V6.56l-5.22 5.22a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd"/></svg>
                    <span class="text-faint sm:hidden">{{ $link->label }}</span>
                </span>
            </a>
        </li>
        @endforeach
    </ul>
</section>
