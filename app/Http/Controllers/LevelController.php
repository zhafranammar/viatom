<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Scene;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function play()
    {
        $user = auth()->user();
        $level = $user->current_level;
        $scene = Scene::where('level', $level)->first();
        if ($scene->type == 'quiz') {
            $quiz = Quiz::where('level', $level)->first();
            return view('games.quiz', compact('quiz'));
        }
        $page = 'games.' . $scene->type;
        return view($page, compact('scene'));
    }

    public function retry()
    {
        $user = auth()->user();
        $level = $user->current_level;
        $scene = Scene::where('level', $level)->first();
        $page = 'games.' . $scene->type;
        return view($page, compact('scene'));
    }

    public function nextLevel()
    {
        $user = auth()->user();
        $user->current_level = $user->current_level + 1;
        if ($user->max_level < $user->current_level) {
            $user->max_level = $user->current_level;
        }
        if ($user->current_level > Scene::count()) {
            return redirect()->route('finish');
        }
        $user->save();
        return redirect()->route('play');
    }
}
