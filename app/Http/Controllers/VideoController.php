<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.video.list', compact('videos'));

    }

    public function createVideo()
    {
        return view('admin.video.create');
    }

    public function editVideo(Video $video)
    {
        return view('admin.video.update', compact('video'));
    }


    public function store(VideoRequest $request)
    {

        $video = $request->all();

        if ($request->get('type') !== 'link') {
            $path = $request->file('video_file')->store('videos', 'public');
            $video->vpath = $path;
        }

        Video::create($video);

        return redirect()->route('admin.videos.index')->with('success', 'Vidéo créée avec succès.');
    }


    public function show(Video $video)
    {
        return $video;
    }

    public function update(VideoRequest $request, Video $video)
    {
        $video->update($request->validated());

        return redirect()->route('admin.videos.index')->with('success', 'Vidéo modifiée avec succès.');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('admin.videos.index')->with('success', 'Vidéo supprimee avec succès.');
    }
}
