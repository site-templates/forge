@props([
    'copyright' => '© 2026 Ezra Vance',
    'colophon' => 'Set in Spectral and Inter. Built by hand.',
    'topLabel' => 'Back to top',
])
{{-- One hairline, one line of credit, one way back up. Nothing else belongs down here. --}}
<footer class="mt-24 border-t border-line pt-6 sm:mt-32">
    <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-2">
        <p class="text-base text-faint sm:text-sm">{{ $copyright }}</p>
        <a href="#top" class="group inline-flex items-center gap-x-1 py-2.5 text-base text-faint hover:text-ink sm:text-sm">
            {{ $topLabel }}
            <svg viewBox="0 0 16 16" class="arrow-nudge size-4 shrink-0 fill-current" aria-hidden="true"><path d="M8 2.75a.75.75 0 0 1 .53.22l4.25 4.25-1.06 1.06-2.97-2.97v8.44h-1.5V5.31L4.28 8.28 3.22 7.22l4.25-4.25A.75.75 0 0 1 8 2.75Z"/></svg>
        </a>
    </div>
    @if ($colophon)
    <p class="mt-2 text-base text-faint sm:text-sm">{{ $colophon }}</p>
    @endif
</footer>
