<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // make a query to the database to get all the features
        $features = \App\Models\Feature::all();

        return response()->json([
            'code' => 200,
            'data' => $features,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // make response unauthorized
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
        // make a query to the database to get the feature with the given id
        $feature = \App\Models\Feature::find($id);

        return response()->json([
            'code' => 200,
            'data' => $feature,
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
}
