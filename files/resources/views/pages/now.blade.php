<x-layouts.main
    title="Now"
    description="What Ezra Vance is working on, reading, and thinking about at the moment."
    current="/now">

    <x-sections.page-header
        heading="Now"
        body="What has my attention this month. Updated when it stops being true — last time in August 2026."/>

    <x-sections.now-list :items="$now"/>

    <x-sections.prose body="<p>This is a <a href=&quot;https://nownownow.com/about&quot;>now page</a>. The idea is Derek Sivers': one page that says what you are actually doing, so that people who have not spoken to you in two years do not have to guess.</p>"/>

</x-layouts.main>
