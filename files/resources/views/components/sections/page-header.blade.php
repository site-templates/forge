@props([
    'heading' => 'Writing',
    'body' => '',
])
{{-- The opener every interior page shares: one serif line, and a sentence of context when the page needs one. --}}
<section class="mt-12 sm:mt-16">
    <h1 class="font-display text-[1.625rem] font-normal tracking-tight text-balance text-ink sm:text-3xl">{{ $heading }}</h1>
    @if ($body)
    <p class="mt-3 max-w-[62ch] text-base text-pretty text-muted sm:text-[0.9375rem]">{{ $body }}</p>
    @endif
</section>
