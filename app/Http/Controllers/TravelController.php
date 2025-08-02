<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel;
use App\Models\Gemeinde;
use App\Models\Comment;

class TravelController extends Controller
{
    public function index(){

        $travels = Travel::all();
        $gemeinden = Gemeinde::all(['id', 'gemeinde']);

        return view('travel.index', compact('travels', 'gemeinden'));
    }

    public function show(Request $request, $slug){
        $travel = Travel::where('title_slug', $slug)->firstOrFail();
        $comments = Comment::where('commentable_id', $travel->id)->get();
        return view('travel.show', compact('slug', 'travel', 'comments'));
    }
}
