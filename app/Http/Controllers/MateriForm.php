<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Scene;
use Illuminate\Http\Request;

class MateriForm extends Controller
{
    public function index()
    {
        $materis = Materi::all();
        return view('cms.materi.index', compact('materis'));
    }

    public function create()
    {
        return view('cms.materi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'level' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf|max:10240', // Validate file field for required PDF format and maximum file size of 2048 KB
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Simpan file ke direktori storage/app/public
            $path = $file->storeAs('public', $fileName);
        }

        // Create new Materi record
        $materi = new Materi();
        $materi->title = $request->input('title');
        $materi->level = $request->input('level');
        $materi->description = $request->input('description');
        $materi->src = $path . $fileName; // Save the file path in the database
        $materi->save();

        return redirect()->route('materi.index')
            ->with('success', 'Materi created successfully.');
    }

    public function show(string $id)
    {
        $materi = Materi::findOrFail($id);
        return view('cms.materi.show', compact('materi'));
    }

    public function edit(string $id)
    {
        $materi = Materi::findOrFail($id);
        return view('cms.materi.edit', compact('materi'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'level' => 'required',
            'description' => 'required',
            'file' => 'nullable|max:10240', // Validate file field for required PDF format and maximum file size of 2048 KB
        ]);

        $materi = Materi::findOrFail($id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Simpan file ke direktori storage/app/public
            $path = $file->storeAs('public', $fileName);
            $materi->src = $path . $fileName;
        }

        // Create new Materi record

        $materi->title = $request->input('title');
        $materi->level = $request->input('level');
        $materi->description = $request->input('description');
        // Save the file path in the database
        $materi->save();

        return redirect()->route('materi.index')
            ->with('success', 'Materi updated successfully');
    }

    public function destroy(string $id)
    {
        $materi = Materi::find($id);
        // dd($video);
        $materi->delete();

        return redirect()->route('materi.index')
            ->with('success', 'Materi deleted successfully');
    }
}
