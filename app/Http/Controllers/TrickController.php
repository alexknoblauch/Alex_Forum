<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trick;
use App\Models\Comment;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Auth;





class TrickController extends Controller
{
    public function index(){
        $tricks = Trick::latest()->get();
        return view('trick.index', compact('tricks'));
    }

    public function show(Request $request, $slug){
        $trick = Trick::with('user')->where('title_slug', $slug)->firstOrFail();
        $tricks = Trick::latest()->get();
        $type = get_Class($trick);
        $comments = Comment::fetchMorphedComments($trick->id, $type);
        return view('trick.show', compact('trick', 'comments', 'tricks'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:500'],
            'anonym' => ['nullable', 'boolean']
        ]);

        if($request->has('anonym')) {
            $data['anonym'] = 0;
        } else {
            $data['anonym'] = 1;
        }

        $data['title_slug'] = Str::slug($data['title']);
        $data['user_id'] = Auth::user()->id;

        Trick::create($data);

        return redirect(route('trick.index'));
    }
}
