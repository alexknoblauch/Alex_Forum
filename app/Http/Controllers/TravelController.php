<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel;
use App\Models\Gemeinde;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class TravelController extends Controller
{
    public function index(){
        $travels = Travel::all()->reverse();
        $gemeinden = Gemeinde::all();

        return view('travel.index', compact('travels', 'gemeinden'));
    }

    public function show(Request $request, $slug){
        $travel = Travel::where('title_slug', $slug)->firstOrFail();
        $comments = Comment::where('commentable_id', $travel->id)->get();
        return view('travel.show', compact('slug', 'travel', 'comments'));
    }

    public function store(Request $request){
        ##HTTP-Request
        $validated = $request->validate([
            'title' => ['max:60', 'string', 'required'],
            'canton' => ['string', 'required'],
            'gemeinde' => ['max:40', 'string', 'required'],
            'description' => ['max:3000', 'required']
        ]);

        $validated['gemeinde'] = ucfirst($validated['gemeinde']);
        $validated['title_slug'] = Str::slug($request->title);
        $validated['user_id'] = auth()->id();

        Travel::create($validated);

        ##HTTP-Response einleiten
        return redirect()->route('travel.index');
    }
}
