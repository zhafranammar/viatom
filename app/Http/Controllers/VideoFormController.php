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
            'description' => 'required',
            'src' => 'required',
        ]);

        $video = Video::where('level', $id)->first();
        $video->update($request->all());

        return redirect()->route('cms.video.index')
            ->with('success', 'Video updated successfully');
    }

    public function destroy(string $id)
    {
        $video = Video::where('level', $id)->first();
        $video->delete();

        return redirect()->route('video.index')
            ->with('success', 'Video deleted successfully');
    }
}
