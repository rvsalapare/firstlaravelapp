<x-layout title="About us">
    <h1 class="text-3xl font-bold text-primary mb-8">About us</h1>

    <div class="card bg-base-100 shadow-sm">
        <div class="card-body">
            <p>
                Lyrics App is intended for a web user to create lyrics and browse it for later use.
            </p>
        </div>
    </div>

    <x-slot:footer>
        © {{ date('Y') }} Lyrics App
    </x-slot:footer>
</x-layout>