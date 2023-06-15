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

     public function create()
     {
        return view('cms.build-the-atom.create');
     }

     public function store(Request $request)
     {
        // $request->validate([
        //     'title' => 'required',
        //     'level' => 'required',
        //     'description' => 'required',
        //     'src' => 'required',
        // ]);
        // $data = $request->all();
        // $buildtheatom = new BuildTheAtom();
        // $buildtheatom->title = $request['title'];
        // $buildtheatom->level = $request['level'];
        // $buildtheatom->description = $request['description'];
        // $buildtheatom->src = $request['src'];
        
        $buildtheatom = BuildTheAtom::create([
            'title'     => $request->title,
            'level'   => $request->level,
            'description'   => $request->description,
            'src'   => $request->src,
        ]);
        dd($buildtheatom);

        

        return redirect()->route('build-the-atoms.index')
             ->with('success', 'Build The Atom created successfully');
     }
 
     public function show(string $id)
     {
        $buildtheatom = BuildTheAtom::findOrFail($id);
        //  $buildtheatom = BuildTheAtom::where('level', $id)->first();
         return view('cms.build-the-atom.show', compact('buildtheatom'));
     }
 
     public function edit(string $id)
     {
        $buildtheatom = BuildTheAtom::findOrFail($id);
        //  $buildtheatom = BuildTheAtom::where('level', $id)->first();
        //  dd($buildtheatom);
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
 
         $buildtheatom = BuildTheAtom::findOrFail($id);
        //  $buildtheatom = BuildTheAtom::where('level', $id)->first();
        // dd($buildtheatom);
         $buildtheatom->update($request->all());
 
         return redirect()->route('build-the-atoms.index')
             ->with('success', 'Build The Atom updated successfully');
     }
 
     public function destroy(string $id)
     {
        $buildtheatom = BuildTheAtom::findOrFail($id);        
        //  $buildtheatom = BuildTheAtom::where('level', $id)->first();
        //  dd($buildtheatom);
         $buildtheatom->delete();
         
         return redirect()->route('build-the-atoms.index')
             ->with('success', 'Build The Atom deleted successfully');
     }
}
