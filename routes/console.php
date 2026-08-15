<?php

use App\Models\Song;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('songs:fix-entities', function () {
    $songs = Song::all();

    foreach ($songs as $song) {
        $song->update([
            'title'  => html_entity_decode($song->title, ENT_QUOTES),
            'artist' => html_entity_decode($song->artist, ENT_QUOTES),
            'lyrics' => html_entity_decode($song->lyrics, ENT_QUOTES),
        ]);
    }

    $this->info("Fixed {$songs->count()} song(s).");
})->purpose('Decode HTML entities in existing song records');
