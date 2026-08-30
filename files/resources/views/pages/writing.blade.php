<x-layouts.main
    title="Writing"
    description="Essays on interface craft — type, motion, colour, and the parts that are hard to talk about."
    current="/writing">

    <x-sections.page-header
        heading="Writing"
        body="Essays on interface craft, published when there is something worth saying. Roughly monthly, occasionally not."/>

    <x-sections.writing-archive :writings="$writings"/>

    <x-sections.subscribe
        label="Subscribe"
        body="New essays, roughly monthly. No other mail, ever."
        placeholder="you@example.com"
        buttonText="Subscribe"
        action="https://example.com/subscribe"/>

</x-layouts.main>
