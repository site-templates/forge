@props(['title' => 'Home', 'description' => '', 'current' => '/'])
<!doctype html>
<html lang="en" class="scheme-only-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <!-- The favicon is the same portrait as the avatar chip, rounded to match. -->
    <link rel="icon" href="/favicon.png" type="image/png">

    <!--
        Spectral carries every heading and every essay body; Inter carries the
        interface. Two families, four weights, one request.
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Spectral:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind, then the token layer and the glide in resources/css/site.css -->
    @vite(['resources/css/site.css'])

    <!-- The site's only script: the block that follows your pointer down a list. -->
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased" data-instant-navigation>

    <div class="isolate mx-auto w-full max-w-[40rem] px-6 pt-10 pb-24 sm:pt-14 sm:pb-32">

        <!-- Nav links live in resources/data/site.json (nav_links) — edit once, every page follows. -->
        <x-nav :links="$site->nav_links" :current="$current"/>

        <main>
            {{ $slot }}
        </main>

        <x-footer/>

    </div>

</body>
</html>
