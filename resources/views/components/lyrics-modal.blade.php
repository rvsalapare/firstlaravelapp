@props(['song'])

<dialog id="lyrics-modal-{{ $song->id }}" class="modal">
    <div class="modal-box max-w-2xl">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" aria-label="Close lyrics">✕</button>
        </form>
        <h3 class="text-xl font-bold text-primary">{{ $song->title }}</h3>
        <p class="text-sm text-base-content/60 mt-1">by {{ $song->artist }}</p>
        <p class="whitespace-pre-line leading-relaxed mt-4">{{ $song->lyrics }}</p>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>