<x-layout title="Add Song">
    <h1 class="page-title">Add New Song</h1>

    <div class="card">
        <form action="{{ route('songs.store') }}" method="POST">
            @csrf

            <x-form-input 
                name="title" 
                label="Song Title" 
                placeholder="e.g., Blank Space"
            />

            <x-form-input 
                name="artist" 
                label="Artist" 
                placeholder="e.g., Taylor Swift"
            />

            <x-form-textarea 
                name="lyrics" 
                label="Lyrics" 
                placeholder="Enter the song lyrics..."
                rows="8"
            />

            <button type="submit" class="btn btn-primary">Save Song</button>
        </form>
    </div>

    <x-slot:footer>
        © {{ date('Y') }} Lyrics App
    </x-slot:footer>
</x-layout>