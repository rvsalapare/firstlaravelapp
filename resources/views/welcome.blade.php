<x-layout title="Home - Songs">
    <div class="flex justify-between items-center mb-8 gap-4">
        <h1 class="text-3xl font-bold text-primary">Song Lyrics</h1>
        <a href="{{ route('songs.create') }}" class="btn btn-primary">+ Add Song</a>
    </div>

    @forelse($songs as $song)
        @if($loop->first)
        <div class="grid gap-6" style="grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));">
        @endif
            <x-song-card :song="$song" />
        @if($loop->last)
        </div>
        @endif
    @empty
        <div class="card bg-base-100 shadow-sm">
            <div class="card-body text-center text-base-content/60">
                No songs yet. <a href="{{ route('songs.create') }}" class="link link-primary">Add one now!</a>
            </div>
        </div>
    @endforelse

    <x-slot:footer>
        © {{ date('Y') }} Lyrics App
    </x-slot:footer>
</x-layout>