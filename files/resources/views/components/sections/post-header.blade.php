@props([
    'backText' => 'Writing',
    'backLink' => '/writing',
    'date' => '',
    'readTime' => '',
    'title' => 'An essay',
    'description' => '',
])
{{-- The top of an essay: the way back, the date, the title in the serif, and the standfirst. --}}
<header class="mt-10 sm:mt-14">
    <a href="{{ $backLink }}" class="group inline-flex items-center gap-x-1 py-2.5 text-base text-faint hover:text-ink sm:text-sm">
        <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/></svg>
        {{ $backText }}
    </a>

    <p class="mt-6 text-base tabular-nums text-faint sm:text-sm">
        {{ $date }}
        @if ($readTime)
        <span class="px-1.5" aria-hidden="true">·</span>{{ $readTime }}
        @endif
    </p>

    <h1 class="mt-3 max-w-[24ch] font-display text-3xl font-normal tracking-tight text-pretty text-ink sm:text-[2.5rem] sm:leading-[1.12]">{{ $title }}</h1>

    @if ($description)
    <p class="mt-5 max-w-[62ch] text-lg text-pretty text-muted sm:text-base">{{ $description }}</p>
    @endif
</header>
