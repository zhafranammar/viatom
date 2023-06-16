<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SceneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scene = \App\Models\Scene::all();

        return response()->json([
            'code' => 200,
            'data' => $scene
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'code' => 401,
            'message' => 'Unauthorized',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //find scene by level
        $scene = \App\Models\Scene::where('level', $id)->first();

        if ($scene->type == "video") {
            $detail = \App\Models\Video::where('level', $scene->level)->first();
        } else if ($scene->type == "materi") {
            $detail = \App\Models\Materi::where('level', $scene->level)->first();
        } else if ($scene->type == "build-the-atom") {
            $detail = \App\Models\BuildTheAtom::where('level', $scene->level)->first();
        } else if ($scene->type == "see-the-atom") {
            $detail = \App\Models\SeeTheAtom::where('level', $scene->level)->first();
        } else if ($scene->type == "atom-experiment") {
            $detail = \App\Models\AtomExperiment::where('level', $scene->level)->first();
        } else if ($scene->type == "quiz") {
            $detail = \App\Models\Quiz::where('level', $scene->level)->first();
        } else if ($scene->type == "mini-game") {
            $detail = \App\Models\MiniGame::where('level', $scene->level)->first();
        }
        return response()->json([
            'code' => 200,
            'data' => $scene,
            'detail' => $detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
