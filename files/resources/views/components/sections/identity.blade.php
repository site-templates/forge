@props([
    'name' => 'Ezra Vance',
    'role' => 'Design engineer',
    'showStatus' => '1',
    'status' => 'Available for new work from October',
])
{{-- Who this is, in two lines. Deliberately small: the reference this template comes from opens at 24px, not 64px, and the restraint is the whole first impression. --}}
<section class="mt-12 sm:mt-16">
    <h1 class="font-display text-2xl font-normal tracking-tight text-ink">{{ $name }}</h1>
    <p class="mt-1 text-base text-faint sm:text-sm">{{ $role }}</p>

    @if ($showStatus)
    <p class="mt-4 flex items-center gap-x-2 text-base text-muted sm:text-sm">
        <span class="size-1.5 shrink-0 rounded-full bg-signal" aria-hidden="true"></span>
        {{ $status }}
    </p>
    @endif
</section>
