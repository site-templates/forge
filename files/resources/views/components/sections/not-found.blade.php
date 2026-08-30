@props([
    'heading' => 'This page does not exist',
    'body' => 'The link may be old, or I may have moved something. The writing and the work are both still where you would expect.',
    'linkText' => 'Back to the beginning',
    'link' => '/',
])
{{-- The 404. Same column, same voice — a wrong URL is no reason to change the design. --}}
<section class="mt-16 sm:mt-24">
    <p class="font-display text-6xl font-normal tracking-tight text-line">404</p>
    <h1 class="mt-6 font-display text-[1.625rem] font-normal tracking-tight text-balance text-ink sm:text-3xl">{{ $heading }}</h1>
    <p class="mt-3 max-w-[58ch] text-base text-pretty text-muted sm:text-[0.9375rem]">{{ $body }}</p>

    <a href="{{ $link }}" class="group mt-4 inline-flex items-center gap-x-1 py-2.5 text-base text-ink hover:text-accent sm:text-sm">
        <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/></svg>
        {{ $linkText }}
    </a>
</section>
