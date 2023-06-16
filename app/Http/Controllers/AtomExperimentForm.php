<?php

namespace App\Http\Controllers;

use App\Models\AtomExperiment;
use Illuminate\Http\Request;

class AtomExperimentForm extends Controller
{
    /**
     * Make resource cms
     */

     public function index()
     {
         $atomexperiments = AtomExperiment::all();
         return view('cms.atom-experiment.index', compact('atomexperiments'));
     }

     public function create()
     {
        return view('cms.atom-experiment.create');
     }

     public function store(Request $request)
     {
        // $request->validate([
        //     'title' => 'required',
        //     'level' => 'required',
        //     'description' => 'required',
        //     'src' => 'required',
        // ]);
        
        $atomexperiment = AtomExperiment::create([
            'title'     => $request->title,
            'level'   => $request->level,
            'description'   => $request->description,
            'src'   => $request->src,
        ]);
        // dd($atomexperiment);

        return redirect()->route('atom-experiments.index')
             ->with('success', 'Atom Experiment created successfully');
     }
 
     public function show(string $id)
     {
        $atomexperiment = AtomExperiment::findOrFail($id);
        //  $buildtheatom = BuildTheAtom::where('level', $id)->first();
         return view('cms.atom-experiment.show', compact('atomexperiment'));
     }
 
     public function edit(string $id)
     {
        $atomexperiment = AtomExperiment::findOrFail($id);
        //  $buildtheatom = BuildTheAtom::where('level', $id)->first();
        //  dd($buildtheatom);
         return view('cms.atom-experiment.edit', compact('atomexperiment'));
     }
 
     public function update(Request $request, string $id)
     {
         $request->validate([
             'title' => 'required',
             'level' => 'required',
             'description' => 'required',
             'src' => 'required',
         ]);
 
         $atomexperiment = AtomExperiment::findOrFail($id);
        //  $buildtheatom = BuildTheAtom::where('level', $id)->first();
        // dd($buildtheatom);
         $atomexperiment->update($request->all());
 
         return redirect()->route('atom-experiments.index')
             ->with('success', 'Atom Experiment updated successfully');
     }
 
     public function destroy(string $id)
     {
        $atomexperiment = AtomExperiment::findOrFail($id);        
        //  $buildtheatom = BuildTheAtom::where('level', $id)->first();
        //  dd($buildtheatom);
         $atomexperiment->delete();
         
         return redirect()->route('atom-experiments.index')
             ->with('success', 'Atom Experiment deleted successfully');
     }
}
