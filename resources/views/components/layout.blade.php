@props([
    'title' => 'Default Title'
])
<!DOCTYPE html>
<html lang="en" data-theme="lyricsapp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fonts
</head>
<body class="min-h-screen flex flex-col bg-base-200">
    <div class="navbar bg-base-100 shadow-sm sticky top-0 z-10">
        <div class="max-w-3xl mx-auto w-full flex justify-center gap-6">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About Us</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
        </div>
    </div>
    <main class="w-full max-w-3xl mx-auto px-6 py-10 flex-1">
        {{ $slot }}
    </main>
    @if (isset($footer))
        <footer class="mt-auto py-8 text-center text-sm text-base-content/60">
            {{ $footer }}
        </footer>
    @endif
</body>
</html>