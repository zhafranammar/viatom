<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scene;

class SceneFormController extends Controller
{
    /**
     * Make resource cms
     */

    public function index()
    {
        $scenes = Scene::all();
        return view('cms.scenes.index', compact('scenes'));
    }

    public function show(Scene $scene)
    {
        $scene = Scene::find($scene->id);
        return view('cms.scenes.show', compact('scene'));
    }

    public function edit(Scene $scene)
    {
        $scene = Scene::find($scene->id);
        return view('cms.scenes.edit', compact('scene'));
    }

    public function update(Request $request, Scene $scene)
    {
        $request->validate([
            'title' => 'required',
            'level' => 'required',
            'description' => 'required',
            'src' => 'required',
        ]);

        $scene->update($request->all());

        return redirect()->route('cms.scenes.index')
            ->with('success', 'Scene updated successfully');
    }

    public function destroy(Scene $scene)
    {
        $scene = Scene::find($scene->id);
        $scene->delete();
        return redirect()->route('cms.scenes.index')
            ->with('success', 'Scene deleted successfully');
    }
}
