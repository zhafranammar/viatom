<?php

namespace App\Http\Controllers;

use App\Models\SeeTheAtom;
use Illuminate\Http\Request;

class SeeTheAtomFormController extends Controller
{
    //
    public function index()
     {
         $seetheatoms = SeeTheAtom::all();
         return view('cms.see-the-atom.index', compact('seetheatoms'));
     }

     public function create()
     {
        return view('cms.see-the-atom.create');
     }

     public function store(Request $request)
     {
        $request->validate([
            'title' => 'required',
            'level' => 'required',
            'description' => 'required',
            'src' => 'required',
        ]);

        SeeTheAtom::create([
            'title'     => $request->title,
            'level'   => $request->level,
            'description'   => $request->descrtiption,
            'src'   => $request->src,
        ]);

        return redirect()->route('cms.build-the-atom.index')
             ->with('success', 'Build The Atom created successfully');
     }
 
     public function show(string $id)
     {
         $buildtheatom = SeeTheAtom::where('level', $id)->first();
         return view('cms.build-the-atom.show', compact('buildtheatom'));
     }
 
     public function edit(string $id)
     {
         $buildtheatom = SeeTheAtom::where('level', $id)->first();
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
 
         $buildtheatom = SeeTheAtom::where('level', $id)->first();
         $buildtheatom->update($request->all());
 
         return redirect()->route('cms.build-the-atom.index')
             ->with('success', 'Build The Atom updated successfully');
     }
 
     public function destroy(string $id)
     {
         $buildtheatom = SeeTheAtom::where('level', $id)->first();
         $buildtheatom->delete();
 
         return redirect()->route('cms.build-the-atom.index')
             ->with('success', 'Build The Atom deleted successfully');
     }
}
