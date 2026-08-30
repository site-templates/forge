<x-layouts.main
    title="Projects"
    description="Selected product design and front-end work, plus the small things I run on the side."
    current="/projects">

    <x-sections.page-header
        heading="Projects"
        body="Work I did enough of to put my name on. Most of it was a team; the lines below are the parts that were mine."/>

    <x-sections.project-list :projects="$projects"/>

    <x-sections.index-list label="Side projects" :items="$ventures"/>

</x-layouts.main>
