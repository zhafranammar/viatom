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
        $levels = \App\Models\Scene::all()->where('level', '<=', $maxLevel);
        $detail = [];
        foreach ($levels as $level) {
            if ($level->type == 'quiz') {
                $detail[] = \App\Models\Quiz::where('level', $level->level)->first();
            } else if ($level->type == 'atom-experiment') {
                $detail[] = AtomExperiment::where('level', $level->level)->first();
            } else if ($level->type == 'build-the-atom') {
                $detail[] = BuildTheAtom::where('level', $level->level)->first();
            } else if ($level->type == 'see-the-atom') {
                $detail[] = SeeTheAtom::where('level', $level->level)->first();
            } else if ($level->type == 'video') {
                $detail[] = Video::where('level', $level->level)->first();
            } else if ($level->type == 'materi') {
                $detail[] = \App\Models\Materi::where('level', $level->level)->first();
            }
        }
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
        return view('learning-materials');
    }

    public function videos()
    {
        $maxLevel = auth()->user()->max_level;
        $detail = Video::all()->where('level', '<=', $maxLevel);
        $href = 'videos';
        return view('menus', compact('detail', 'href'));
    }

    public function materis()
    {
        $maxLevel = auth()->user()->max_level;
        $detail = \App\Models\Materi::all()->where('level', '<=', $maxLevel);
        $href = 'materi';
        return view('menus', compact('detail', 'href'));
    }

    public function materiPlay(string $id)
    {
        $detail = \App\Models\Materi::where('level', $id)->first();
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function videosPlay(string $id)
    {
        $detail = \App\Models\Video::where('level', $id)->first();
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function quiz()
    {
        $maxLevel = auth()->user()->max_level;
        $detail = \App\Models\Quiz::all()->where('level', '<=', $maxLevel);
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
        $detail = AtomExperiment::where('level', $id)->first();
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function buildTheAtomPlay(string $id)
    {
        $detail = BuildTheAtom::where('level', $id)->first();
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function seeTheAtomPlay(string $id)
    {
        $detail = SeeTheAtom::where('level', $id)->first();
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }

    public function quizPlay(string $id)
    {
        $detail = \App\Models\Quiz::where('level', $id)->first();
        $user = auth()->user();
        $user->current_level = $detail->level;
        $user->save();
        return redirect()->route('play');
    }
}
