{{-- The dynamic essay page: serves /writing/{slug} for every entry in resources/data/collections/writings.json, with $writings bound to the entry whose slug matches the URL. Add an essay by adding an entry there — no new page file needed. Inside this page $entries is the whole collection, which is how the list at the foot knows about the others. --}}
<x-layouts.main
    :title="$writings->title"
    :description="$writings->description"
    current="/writing">

    <article>
        <x-sections.post-header
            backText="Writing"
            backLink="/writing"
            :date="$writings->dateFormatted"
            :readTime="$writings->readTime"
            :title="$writings->title"
            :description="$writings->description"/>

        <x-sections.post-body :body="$writings->content"/>
    </article>

    <x-sections.more-writing label="More writing" :current="$writings->slug" :writings="$entries"/>

</x-layouts.main>
