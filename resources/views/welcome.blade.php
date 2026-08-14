<x-layout title="Home - Songs">
    <div class="page-header">
        <h1 class="page-title">Song Lyrics</h1>
        <a href="{{ route('songs.create') }}" class="btn btn-primary">+ Add Song</a>
    </div>

    @forelse($songs as $song)
        @if($loop->first)
        <div class="songs-grid">
        @endif
            <x-song-card :song="$song" />
        @if($loop->last)
        </div>
        @endif
    @empty
        <div class="card">
            <p style="text-align: center; color: #666;">No songs yet. <a href="{{ route('songs.create') }}">Add one now!</a></p>
        </div>
    @endforelse

    <x-slot:footer>
        © {{ date('Y') }} Lyrics App
    </x-slot:footer>
</x-layout>