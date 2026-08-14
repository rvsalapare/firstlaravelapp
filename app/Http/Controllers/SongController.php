<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::latest()->get();
        return view('welcome', compact('songs'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'lyrics' => 'required|string',
        ]);

        Song::create($validated);

        return redirect('/')->with('success', 'Song created successfully!');
    }

    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    public function update(Request $request, Song $song)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'lyrics' => 'required|string',
        ]);

        $song->update($validated);

        return redirect('/')->with('success', 'Song updated successfully!');
    }

    public function destroy(Song $song)
    {
        $song->delete();
        return redirect('/')->with('success', 'Song deleted!');
    }
}