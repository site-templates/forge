<x-layouts.main
    title="Home"
    description="Ezra Vance is a design engineer in Lisbon, building interfaces for small teams."
    current="/">

    <x-sections.identity
        name="Ezra Vance"
        role="Design engineer"
        showStatus="1"
        status="Available for new work from October"/>

    <x-sections.intro body="<p>Hello. I'm Ezra. I design and build interfaces, mostly for small teams shipping software that people open every day.</p><p>Fifteen years in, I still think the interesting part is the middle: the thousand small decisions between a good idea and something that feels obvious to use. Type, spacing, states, the shape of an empty screen. I do the design and I write the front-end, which means those decisions get made once instead of twice.</p><p>These days I lead design engineering at <a href=&quot;/projects&quot;>Cadence</a> and write here about the parts of the craft that are hard to talk about.</p>"/>

    <x-sections.index-list label="Selected projects" :items="$projects"/>

    <x-sections.writing-list label="Recent writing" linkText="All writing" link="/writing" :writings="$writings"/>

    <x-sections.elsewhere label="Elsewhere" :links="$site->elsewhere"/>

</x-layouts.main>
