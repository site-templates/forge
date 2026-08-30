<x-layouts.main
    title="About"
    description="Ezra Vance — design engineer in Lisbon. Fifteen years of design and front-end, mostly for small product teams."
    current="/about">

    <x-sections.page-header heading="About"/>

    <x-sections.prose spacing="tight" body="<p>I'm a design engineer. In practice that means I do the product design and then build the front-end, and that the handoff everyone complains about happens inside my own head instead of across a document.</p><p>I started in 2013 making websites for people in Turin who mostly wanted a phone number on a page. I learned the actual craft at Harbour, where a very patient design director spent two years teaching me that almost every problem I brought her was a spacing problem. I have been at Cadence since 2022, where I look after the design system and the parts of the product that need someone to care about a hundred small things at once.</p><p>I care about interfaces that are quiet, fast, and honest about what they can do. I am suspicious of animation that exists to prove effort, and of design systems that grow faster than the product using them.</p><p>I live in Lisbon with my partner and a dog with strong opinions about the postal service.</p>"/>

    <x-sections.index-list label="Experience" gutter="wide" :items="$experience"/>

    <x-sections.elsewhere label="Elsewhere" :links="$site->elsewhere"/>

</x-layouts.main>
