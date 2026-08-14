@props(['song'])

<div class="card song-card">
    <form action="{{ route('songs.destroy', $song) }}" method="POST" class="delete-form" onsubmit="return confirm('Are you sure you want to delete this song?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-delete" aria-label="Delete {{ $song->title }}">
            Delete
        </button>
    </form>

    <div class="song-header">
        <h2 class="song-title">{{ $song->title }}</h2>
        <p class="song-artist">by {{ $song->artist }}</p>
    </div>

    <p class="song-lyrics-preview">
        {{ Str::limit($song->lyrics, 120, '...') }}
    </p>

    <div class="song-actions">
        <button type="button" class="btn btn-primary" onclick="openLyricsModal({{ $song->id }})">
            View Lyrics
        </button>
        <a href="{{ route('songs.edit', $song) }}" class="btn btn-primary" aria-label="Edit {{ $song->title }}">
            Edit
        </a>
    </div>
</div>

<x-lyrics-modal :song="$song" />