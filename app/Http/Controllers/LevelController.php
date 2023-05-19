<?php

namespace App\Http\Controllers;

use App\Models\Scene;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function play()
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
        $user->save();
        return redirect()->route('play');
    }
}
