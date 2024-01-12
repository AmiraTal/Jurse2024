<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoRequest;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('admin.photo.list', compact('photos'));
    }

    public function edit(Photo $photo)
    {
        return view('admin.photo.update', compact('photo'));
    }

    public function show(Photo $photo)
    {
        return $photo;
    }

    public function update(PhotoRequest $request, Photo $photo)
    {
        $validated = $request->validated();
        if ($request->hasFile('path')) {
            Storage::delete('public/' . $photo->path);
            $path = $request->file('path')->store('photos', 'public');
            $validated['path'] = $path;
        }
        $photo->update($validated);
        return redirect()->route('admin.photos.index')->with('success', 'Photo mise à jour avec succès.');
    }


    public function store(PhotoRequest $request)
    {

        $validated = $request->validated();

        if ($request->hasFile('path')) {
            $path = $request->file('path')->store('photos', 'public');
            $validated['path'] = $path;
        }

        Photo::create($validated);

        return redirect()->route('admin.photos.index')->with('success', 'Photo ajoutée avec succès.');
    }

    public function create()
    {
        return view('admin.photo.create');
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        return redirect()->route('admin.photos.index')->with('success', 'Vidéo modifiée avec succès.');
    }
}
