@props([
    'items' => [],
])
{{-- A description list: what each thing is, then what is happening with it. The term sits in the left gutter on desktop and above the detail on a phone. --}}
<section class="mt-10 sm:mt-12">
    <dl class="-mx-3">
        @foreach ($items as $item)
        <div class="grid gap-x-5 px-3 py-4 sm:grid-cols-[6.5rem_1fr]">
            <dt class="text-[0.6875rem] font-medium tracking-[0.16em] text-faint uppercase max-sm:mb-2 sm:mt-1.5">{{ $item->title }}</dt>
            <dd class="max-w-[62ch] text-base/7 text-pretty text-muted sm:text-[0.9375rem]/7">{{ $item->description }}</dd>
        </div>
        @endforeach
    </dl>
</section>
