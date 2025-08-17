<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trick;
use App\Models\Comment;


class TrickController extends Controller
{
    public function index(){
        $tricks = Trick::latest()->get();
        return view('trick.index', compact('tricks'));
    }

    public function show(Request $request, $tricks_und_tipp){
        $trick = Trick::with('user')->where('title_slug', $tricks_und_tipp)->firstOrFail();
        $tricks = Trick::latest()->get();
        $type = get_Class($trick);
        $comments = Comment::fetchMorphedComments($trick->id, $type);
        return view('trick.show', compact('trick', 'comments', 'tricks'));
    }

    
}
