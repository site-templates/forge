@props([
    'label' => 'Subscribe',
    'body' => 'New essays, roughly monthly. No other mail, ever.',
    'placeholder' => 'you@example.com',
    'buttonText' => 'Subscribe',
    'action' => 'https://example.com/subscribe',
])
{{-- One row: a field and a button. Point the form at whatever list service you use. --}}
<section class="mt-20 border-t border-line pt-10 sm:mt-24">
    <h2 class="text-[0.6875rem] font-medium tracking-[0.16em] text-faint uppercase">{{ $label }}</h2>
    <p class="mt-3 max-w-[62ch] text-base text-pretty text-muted sm:text-sm">{{ $body }}</p>

    <form action="{{ $action }}" method="post" class="mt-5 flex flex-wrap gap-3">
        <label for="forge-subscribe" class="sr-only">Email address</label>
        <input id="forge-subscribe" type="email" name="email" required placeholder="{{ $placeholder }}"
            class="min-w-0 flex-1 rounded-lg border border-line bg-surface px-3.5 py-2.5 text-base text-ink placeholder:text-faint focus:border-faint focus:outline-none sm:text-sm">
        <button type="submit" class="rounded-lg bg-accent px-4 py-2.5 text-base font-medium text-accent-ink hover:bg-ink sm:text-sm">{{ $buttonText }}</button>
    </form>
</section>
