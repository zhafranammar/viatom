<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AtomExperiment;
use App\Models\BuildTheAtom;
use App\Models\SeeTheAtom;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function adventure()
    {
        $maxLevel = auth()->user()->max_level;
        $detail = \App\Models\Scene::all()->where('level', '<=', $maxLevel);
        $href = 'adventure';
        return view('menus', compact('detail', 'href'));
    }

    public function adventurePlay(string $id)
    {
        $detail = \App\Models\Scene::find($id);
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function atomExperiment()
    {
        $maxLevel = auth()->user()->max_level;
        $detail = AtomExperiment::all()->where('level', '<=', $maxLevel);
        $href = 'atom-experiment';
        return view('menus', compact('detail', 'href'));
    }

    public function buildTheAtom()
    {
        $maxLevel = auth()->user()->max_level;
        $detail = BuildTheAtom::all()->where('level', '<=', $maxLevel);
        $href = 'build-the-atom';
        return view('menus', compact('detail', 'href'));
    }

    public function seeTheAtom()
    {
        $maxLevel = auth()->user()->max_level;
        $detail = SeeTheAtom::all()->where('level', '<=', $maxLevel);
        $href = 'see-the-atom';
        return view('menus', compact('detail', 'href'));
    }

    public function learningMaterials()
    {
        $maxLevel = auth()->user()->max_level;
        $detailVideo = Video::all()->where('level', '<=', $maxLevel);
        $detailMateri = \App\Models\Materi::all()->where('level', '<=', $maxLevel);
        // gabungkan detail video dan materi
        $detail = $detailVideo->concat($detailMateri)->sortBy('level');
        $href = 'learning-materials';
        return view('menus', compact('detail', 'href'));
    }

    public function quiz()
    {
        $detail = \App\Models\Quiz::all();
        $href = 'quiz';
        return view('menus', compact('detail', 'href'));
    }

    public function miniGame()
    {
        $detail = \App\Models\MiniGame::all();
        return view('menus', compact('detail'));
    }

    public function atomExperimentPlay(string $id)
    {
        $detail = AtomExperiment::find($id);
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function buildTheAtomPlay(string $id)
    {
        $detail = BuildTheAtom::find($id);
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function seeTheAtomPlay(string $id)
    {
        $detail = SeeTheAtom::find($id);
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function learningMaterialsPlay(string $id)
    {
        $maxLevel = auth()->user()->max_level;
        $detail = Video::all()->where('level', '<=', $maxLevel);
        $detail = $detail->merge(\App\Models\Materi::all()->where('level', '<=', $maxLevel));
        $detail = $detail->where('id', $id)->first();
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function quizPlay(string $id)
    {
        $detail = \App\Models\Quiz::find($id);
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }
}
