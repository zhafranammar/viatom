<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = \App\Models\Materi::all();
        return response()->json([
            'code' => 200,
            'data' => $materi,
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
        $materi = \App\Models\Materi::find($id);
        return response()->json([
            'code' => 200,
            'data' => $materi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'code' => 401,
            'message' => 'Unauthorized',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            'code' => 401,
            'message' => 'Unauthorized',
        ]);
    }

    public function learningMaterials()
    {
        $data = \App\Models\Scene::where('type', 'materi')->orWhere('type', 'video')->get();

        return response()->json([
            'code' => 200,
            'data' => $data,
        ]);
    }

    public function learningMaterial(string $id)
    {
        $data = \App\Models\Materi::where('level', $id)->first();
        if (!$data) {
            $data = \App\Models\Video::where('level', $id)->first();
        }
        return response()->json([
            'code' => 200,
            'data' => $data,
        ]);
    }
}
