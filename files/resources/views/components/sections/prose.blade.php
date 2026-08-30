@props([
    'label' => '',
    'spacing' => 'standard',
    'body' => '<p>A paragraph.</p>',
])
{{-- A block of rich text at reading width, with an optional section label above it. Set the spacing to Tight when this is the first thing under a page heading — the standard gap is sized for a block arriving partway down a page. --}}
@if ($spacing == 'tight')
<section class="mt-10 sm:mt-12">
@else
<section class="mt-20 sm:mt-24">
@endif
    @if ($label)
    <h2 class="mb-5 text-[0.6875rem] font-medium tracking-[0.16em] text-faint uppercase">{{ $label }}</h2>
    @endif
    <div class="prose max-w-[65ch]">
        {!! $body !!}
    </div>
</section>
