@props([
    'projects' => [],
])
{{-- The projects page: the same work as the homepage ledger, one density down. Title and year on the first line, what it actually was underneath, at reading width. --}}
<section class="mt-10 sm:mt-12">
    <ul role="list" data-glide class="-mx-3">
        @foreach ($projects as $project)
        <li>
            <a href="{{ $project->url }}" target="_blank" rel="noopener" data-glide-item class="group grid gap-x-5 rounded-lg px-3 py-4 sm:grid-cols-[4.5rem_1fr] sm:items-baseline">
                <span class="text-base tabular-nums text-faint max-sm:hidden sm:text-sm">{{ $project->year }}</span>
                <span>
                    <span class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1">
                        <span class="inline-flex items-center gap-x-1 text-base text-ink group-hover:text-accent sm:text-[0.9375rem]">
                            {{ $project->title }}
                            <svg viewBox="0 0 16 16" class="arrow-nudge size-4 shrink-0 fill-faint group-hover:fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M4.22 11.78a.75.75 0 0 1 0-1.06L9.44 5.5H5.75a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 .75.75v5.5a.75.75 0 0 1-1.5 0V6.56l-5.22 5.22a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd"/></svg>
                        </span>
                        <span class="text-base text-faint sm:text-sm"><span class="sm:hidden">{{ $project->year }} · </span>{{ $project->note }}</span>
                    </span>
                    <span class="mt-1.5 block max-w-[62ch] text-base text-pretty text-muted sm:text-sm">{{ $project->description }}</span>
                </span>
            </a>
        </li>
        @endforeach
    </ul>
</section>
