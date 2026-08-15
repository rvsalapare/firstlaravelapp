<x-layout title="Edit Song">
    <h1 class="text-3xl font-bold text-primary mb-8">Edit Song</h1>

    <div class="card bg-base-100 shadow-sm">
        <div class="card-body">
            <form action="{{ route('songs.update', $song) }}" method="POST" class="flex flex-col gap-6">
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

                <div>
                    <button type="submit" class="btn btn-primary">Update Song</button>
                </div>
            </form>
        </div>
    </div>

    <x-slot:footer>
        © {{ date('Y') }} Swiftie
    </x-slot:footer>
</x-layout>