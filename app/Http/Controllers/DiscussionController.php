<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Discussion;
use App\Models\Reply;
use Illuminate\Support\Str;


class DiscussionController extends Controller
{
    public function index()
    {
        $discussions = Discussion::all();
        return view('discussion.index', compact('discussions'));
    }

    public function create()
    {
        return view('discussion.create');
    }

    public function show(Discussion $discussion)
    {
        return view('discussion.show', compact('discussion'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $discussion = new Discussion();
        $discussion->topic = $request->title;
        $discussion->body = $request->body;
        $discussion->user_id = auth()->user()->id;
        $discussion->username = auth()->user()->name;
        $discussion->slug = Str::slug($request->title, '-');
        $discussion->save();

        return redirect('/discussions/' . $discussion->id);
    }

    public function storeReply(Request $request, Discussion $discussion)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $reply = new Reply();
        $reply->body = $request->body;
        $reply->user_id = auth()->user()->id;
        $reply->discussion_id = $discussion->id;
        $reply->save();

        return redirect('/discussions/' . $discussion->id);
    }
}
