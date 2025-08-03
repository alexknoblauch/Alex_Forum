<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Helpinghand;
use App\Models\Comment;
use App\Models\Gemeinde;
use Illuminate\Support\Str; 


class HelpingController extends Controller
{
    public function index(){
        $tasks = Helpinghand::all()->reverse();
        $gemeinden = Gemeinde::all();
        $titles = Helpinghand::pluck('title')->toArray();
        return view('helping.index', compact('tasks', 'gemeinden', 'titles'));
    }

    public function show($slug){
        $post = Helpinghand::where('title_slug', $slug)->firstOrFail();
        $comments = Comment::where('commentable_id', $post->id)->get();
        return view('helping.show', compact('post', 'comments'));
    }

    public function store(Request $request){
            ##HTTP Request
            $data = $request->validate([
                'title' => ['max:60', 'string', 'required'],
                'canton' => ['required', 'string'],
                'location' => ['max:40','required', 'string'],
                'type' => ['max:40','required', 'string']
            ]);

            $data['title_slug'] = Str::slug($data['title']);
            $data['user_id'] = auth()->id();

            Helpinghand::create($data);

            ##HTTP Response
            return redirect()->route('helping.index');
    }
}
