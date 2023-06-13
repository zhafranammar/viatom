<?php

namespace App\Http\Controllers;

use App\Models\BuildTheAtom;
use Illuminate\Http\Request;

class BuildTheAtomForm extends Controller
{
    /**
     * Make resource cms
     */

     public function index()
     {
         $buildtheatoms = BuildTheAtom::all();
         return view('cms.build-the-atom.index', compact('buildtheatoms'));
     }
 
     public function show(string $id)
     {
         $buildtheatom = BuildTheAtom::where('level', $id)->first();
         return view('cms.build-the-atom.show', compact('buildtheatom'));
     }
 
     public function edit(string $id)
     {
         $buildtheatom = BuildTheAtom::where('level', $id)->first();
         return view('cms.build-the-atom.edit', compact('buildtheatom'));
     }
 
     public function update(Request $request, string $id)
     {
         $request->validate([
             'title' => 'required',
             'level' => 'required',
             'description' => 'required',
             'src' => 'required',
         ]);
 
         $buildtheatom = BuildTheAtom::where('level', $id)->first();
         $buildtheatom->update($request->all());
 
         return redirect()->route('cms.build-the-atom.index')
             ->with('success', 'Build The Atom updated successfully');
     }
 
     public function destroy(string $id)
     {
         $buildtheatom = BuildTheAtom::where('level', $id)->first();
         $buildtheatom->delete();
 
         return redirect()->route('levels.index')
             ->with('success', 'Build The Atom deleted successfully');
     }
}
