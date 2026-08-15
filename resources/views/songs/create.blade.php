<x-layout title="Add Song">
    <h1 class="text-3xl font-bold text-primary mb-8">Add New Song</h1>

    <div class="card bg-base-100 shadow-sm">
        <div class="card-body">
            <form action="{{ route('songs.store') }}" method="POST" class="flex flex-col gap-6">
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

                <div>
                    <button type="submit" class="btn btn-primary">Save Song</button>
                </div>
            </form>
        </div>
    </div>

    <x-slot:footer>
        © {{ date('Y') }} Lyrics App
    </x-slot:footer>
</x-layout>