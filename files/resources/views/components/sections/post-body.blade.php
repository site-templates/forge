@props([
    'body' => '',
])
{{-- The essay itself. The HTML comes from the entry's body field and is styled by .prose in resources/css/site.css. --}}
<div class="prose mt-12 max-w-[65ch] border-t border-line pt-12">
    {!! $body !!}
</div>
