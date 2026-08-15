@props(['song'])

<div class="card bg-base-100 shadow-sm hover:shadow-lg transition-shadow relative">
    <div class="card-body">
        <form action="{{ route('songs.destroy', $song) }}" method="POST" class="absolute top-3 right-3" onsubmit="return confirm('Are you sure you want to delete this song?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-ghost btn-xs text-base-content/50 hover:text-error hover:bg-error/10" aria-label="Delete {{ $song->title }}">
                Delete
            </button>
        </form>

        <h2 class="card-title text-primary pr-16">{{ $song->title }}</h2>
        <p class="text-sm text-base-content/60 -mt-2">by {{ $song->artist }}</p>

        <p class="text-sm text-base-content/70 leading-relaxed">
            {{ Str::limit($song->lyrics, 120, '...') }}
        </p>

        <div class="card-actions mt-auto pt-2">
            <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('lyrics-modal-{{ $song->id }}').showModal()">
                View Lyrics
            </button>
            <a href="{{ route('songs.edit', $song) }}" class="btn btn-primary btn-sm" aria-label="Edit {{ $song->title }}">
                Edit
            </a>
        </div>
    </div>
</div>

<x-lyrics-modal :song="$song" />