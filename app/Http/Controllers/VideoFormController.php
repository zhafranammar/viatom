<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoFormController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('cms.video.index', compact('videos'));
    }

    public function create()
    {
        return view('cms.video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'level' => 'required',
            'video_url' => 'required',
        ]);

        Video::create($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video created successfully.');
    }

    public function show(string $id)
    {
        $video = Video::where('level', $id)->first();
        return view('cms.video.show', compact('video'));
    }

    public function edit(string $id)
    {
        $video = Video::where('level', $id)->first();
        return view('cms.video.edit', compact('video'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'level' => 'required',
            'video_url' => 'required',
        ]);

        $video = Video::findOrFail($id);
        $video->update($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video updated successfully');
    }

    public function destroy(string $id)
    {
        $video = Video::find($id);
        // dd($video);
        $video->delete();

        return redirect()->route('videos.index')
            ->with('success', 'Video deleted successfully');
    }
}
