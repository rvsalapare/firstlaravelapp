<x-layout title="Edit Song">
    <h1 class="page-title">Edit Song</h1>

    <div class="card">
        <form action="{{ route('songs.update', $song) }}" method="POST">
            @csrf
            @method('PUT')

            <x-form-input 
                name="title" 
                label="Song Title" 
                placeholder="e.g., Blank Space"
                value="{{ $song->title }}"
            />

            <x-form-input 
                name="artist" 
                label="Artist" 
                placeholder="e.g., Taylor Swift"
                value="{{ $song->artist }}"
            />

            <x-form-textarea 
                name="lyrics" 
                label="Lyrics" 
                placeholder="Enter the song lyrics..."
                rows="8"
                value="{{ $song->lyrics }}"
            />

            <button type="submit" class="btn btn-primary">Update Song</button>
        </form>
    </div>

    <x-slot:footer>
        © {{ date('Y') }} Swiftie
    </x-slot:footer>
</x-layout>
