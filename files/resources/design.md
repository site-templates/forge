# Forge — design system

A dead-simple personal site: one narrow column, three tiers of grey, and a
single moment of motion. Everything here is a decision, not a default. Keep it.

## Atmosphere

Warm charcoal, read at night. The page should feel like a well-set index card
rather than a website — quiet, dense in the right places, and finished. There
is no hero, no card grid, no accent colour and no scroll animation. What makes
it feel expensive is the vertical rhythm and the restraint, so resist every
instinct to fill space.

The name is the only place the material shows: iron and char, in the warmth of
the background. Never render that literally as an ember or a flame.

## Colours

Semantic tokens only. A raw hex in a section is a bug.

| Token | Value | Role |
|---|---|---|
| `canvas` | `#0B0B0A` | the page. Warm near-black, never neutral grey |
| `surface` | `#161513` | the glide block, inputs, code |
| `ink` | `#EDEAE3` | titles, row titles, the words you came for |
| `muted` | `#ABA59B` | body copy, descriptions |
| `faint` | `#8A8379` | dates, years, section labels, meta |
| `line` | `#262320` | hairlines |
| `accent` | `#F7F4EE` | hover ink, buttons, the focus ring |
| `accent-ink` | `#0B0B0A` | text on the accent |
| `signal` | `#86A97B` | the availability dot — the only chroma on the site |

**There is no accent hue.** Emphasis is luminance: ink over muted over faint.
The three tiers sit at roughly 16:1, 8:1 and 5:1 against the canvas, which is
what makes them read as ranks rather than as three similar greys. Every one of
them clears WCAG AA, so `faint` is a floor — you cannot solve a hierarchy
problem by dimming something further. Use size, weight or position instead.

Do not add a fourth text tier. There is nowhere left to put it.

## Typography

- **Display — Spectral 400/500.** Every heading, every essay title, the name,
  prose `h2`/`h3`, blockquotes. Set with `font-display` and `tracking-tight`.
  Never bold; the serif carries itself at 400.
- **Text — Inter 400/500** with `cv02 cv03 cv04 cv11`. All interface text:
  rows, meta, labels, nav, buttons.

Scale: essay title `1.875rem → 2.5rem` · page title `1.625rem → 1.875rem` ·
name `1.5rem` · row title `1rem → 0.9375rem` · prose `1rem/1.8` at 65ch ·
meta `1rem → 0.875rem` · section label `0.6875rem`.

Body text is `text-base` on mobile and steps **down** at `sm:`. Section labels
are uppercase with `tracking-[0.16em]` and are the *only* heading their section
gets — never put a label above a larger heading that says the same thing.

Numbers get `tabular-nums`. Years, dates and periods all count.

## Spacing and radius

One column, `max-w-[40rem]`, `px-6`. Page `pt-10 sm:pt-14`, `pb-24 sm:pb-32`.
Sections are `mt-20 sm:mt-24` apart; the first section after the header is
`mt-12 sm:mt-16`. More space above a heading than below it, always.

Rows are `px-3 py-2.5` (ledger) or `px-3 py-4` (rows with a description), on a
`-mx-3` track so the text still aligns with the column edge. Radius is `8px`
(`rounded-lg`) on the glide block, rows, inputs and buttons; `12px` and above
belongs to a different template. The one exception is the portrait, which is a
full circle — it is the only round thing on the site and the only photograph,
and those two facts belong together. The favicon is the same portrait, masked
to the same circle.

No shadows anywhere. Depth is a hairline or nothing.

## Components

- **The ledger** (`index-list`) is the spine of the site: year · title · note,
  three columns on desktop, folded to two lines on a phone. Projects, side
  projects and employment history are all the same object at different
  densities. Reach for it before inventing a new shape.
- **Writing surfaces set titles in the serif**; work surfaces set them in Inter.
  That is how the two halves of the site tell themselves apart, and it is worth
  keeping.
- **Rows link, cards do not exist.** There is not a single card in this
  template. If something needs separating, use whitespace, then a hairline.
- **Icons are Heroicons micro (16px)** at `size-4 shrink-0`, filled with
  `fill-faint` and lifting to `fill-accent` inside a hovered row, in an
  `inline-flex items-center gap-x-1` group. Never `h-lh` — it puts the icon's
  bottom on the text baseline and the arrow reads as superscript. The only two
  in the template are arrow-up-right and arrow-left.

## Motion

**One moment: the glide.** A single soft block slides between the rows of a
list as the pointer moves, and between the nav links. It is the only JavaScript
on the site (`public/js/main.js`, ~50 lines) and the only animation. Rows
themselves change colour instantly — per the house rule, transitions are for
things that move, not for things that change colour.

There are **no scroll reveals**, deliberately. Content is visible by default so
the page is honest in a screenshot, a print, a background tab and with
JavaScript switched off. Under `prefers-reduced-motion` the block stops
travelling and simply appears; nothing is ever hidden.

If you add motion, it must respond to something the reader did. Arrival on
screen does not count.

## Voice

First person, understated, specific. Short declaratives. Name real tools and
real numbers — "about 4k stars", "six weeks", "forty lines" — because
specificity is what separates a personal site from a landing page. Admit the
unglamorous parts.

Headings take no full stop; standalone sentences do. No exclamation marks, no
emoji, and never a sentence that sells.

## Anti-patterns

- An accent colour. The moment one appears, the three-tier hierarchy stops
  doing its job and the site becomes ordinary.
- Cards, grids of three, or any section that centres its own text.
- Scroll-triggered fades, staggered entrances, parallax.
- A second display face, or a bold weight on the serif.
- Section padding above `mt-24`. This is a column, not a landing page.
- Photography beyond the portrait. The site has exactly one image on purpose.

## Tokens

```css
@theme {
    --color-canvas: #0b0b0a;
    --color-surface: #161513;
    --color-ink: #edeae3;
    --color-muted: #aba59b;
    --color-faint: #8a8379;
    --color-line: #262320;
    --color-accent: #f7f4ee;
    --color-accent-ink: #0b0b0a;
    --color-signal: #86a97b;

    --font-sans: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif;
    --font-sans--font-feature-settings: 'cv02', 'cv03', 'cv04', 'cv11';
    --font-display: 'Spectral', Georgia, 'Times New Roman', serif;

    --ease-glide: cubic-bezier(0.22, 1, 0.36, 1);
}
```
