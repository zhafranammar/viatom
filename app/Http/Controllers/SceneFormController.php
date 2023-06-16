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

    public function show(string $id)
    {
        $scene = Scene::where('level', $id)->first();
        return view('cms.scenes.show', compact('scene'));
    }

    public function edit(string $id)
    {
        $scene = Scene::where('level', $id)->first();
        return view('cms.scenes.edit', compact('scene'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'level' => 'required',
            'description' => 'required',
            'src' => 'required',
        ]);

        $scene = Scene::where('level', $id)->first();
        $scene->update($request->all());

        return redirect()->route('cms.scenes.index')
            ->with('success', 'Scene updated successfully');
    }

    public function destroy(string $id)
    {
        $scene = Scene::where('level', $id)->first();
        $scene->delete();

        return redirect()->view('levels.index')
            ->with('success', 'Scene deleted successfully');
    }
}
