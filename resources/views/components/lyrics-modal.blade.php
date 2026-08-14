@props(['song'])

<div id="lyrics-modal-{{ $song->id }}" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <div>
                <h2>{{ $song->title }}</h2>
                <p style="margin: 0.25rem 0 0 0; color: var(--text-muted); font-size: 0.9rem;">by {{ $song->artist }}</p>
            </div>
            <button class="modal-close" onclick="closeLyricsModal({{ $song->id }})" aria-label="Close lyrics">&times;</button>
        </div>
        <div class="modal-body">
            <p class="modal-lyrics">{{ $song->lyrics }}</p>
        </div>
    </div>
</div>