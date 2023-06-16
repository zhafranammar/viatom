<?php

namespace App\Http\Controllers;

use App\Models\SeeTheAtom;
use Illuminate\Http\Request;

class SeeTheAtomFormController extends Controller
{
    /**
     * Make resource cms
     */

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
        // $request->validate([
        //     'title' => 'required',
        //     'level' => 'required',
        //     'description' => 'required',
        //     'src' => 'required',
        // ]);
        
        $seetheatoms = SeeTheAtom::create([
            'title'     => $request->title,
            'level'   => $request->level,
            'description'   => $request->description,
            'src'   => $request->src,
        ]);
        // dd($seetheatoms);

        return redirect()->route('see-the-atoms.index')
             ->with('success', 'See The Atom created successfully');
     }
 
     public function show(string $id)
     {
        $seetheatoms = SeeTheAtom::findOrFail($id);
         return view('cms.see-the-atom.show', compact('seetheatom'));
     }
 
     public function edit(string $id)
     {
        $seetheatom = SeeTheAtom::findOrFail($id);
        //  dd($seetheatom);
         return view('cms.see-the-atom.edit', compact('seetheatom'));
     }
 
     public function update(Request $request, string $id)
     {
         $request->validate([
             'title' => 'required',
             'level' => 'required',
             'description' => 'required',
             'src' => 'required',
         ]);
 
         $seetheatoms = SeeTheAtom::findOrFail($id);
        // dd($seetheatom);
         $seetheatoms->update($request->all());
 
         return redirect()->route('see-the-atoms.index')
             ->with('success', 'See The Atom updated successfully');
     }
 
     public function destroy(string $id)
     {
        $seetheatoms = SeeTheAtom::findOrFail($id);        
        //  dd($seetheatom);
         $seetheatoms->delete();
         
         return redirect()->route('see-the-atoms.index')
             ->with('success', 'See The Atom deleted successfully');
     }
}
