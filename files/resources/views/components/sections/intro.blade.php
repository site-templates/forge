@props([
    'body' => '<p>Hello. I design and build interfaces, mostly for small teams shipping software people use every day.</p>',
])
{{-- The opening paragraphs. Rich text, so the owner can add a link or an emphasis without touching markup. --}}
<section class="mt-10 sm:mt-12">
    <div class="prose max-w-[65ch]">
        {!! $body !!}
    </div>
</section>
