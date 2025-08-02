<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cooking;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CookingController extends Controller
{
    
    public function index($slug = null){
        $cookings = Cooking::all()->reverse();  

        return view('cooking.index', compact('cookings'));
    }

    public function show($slug){
        $id = Cooking::where('title_slug', $slug)->firstOrFail()->id;
        $post = Cooking::where('title_slug', $slug)->firstOrFail();
        $comments = Comment::where('commentable_id', $id)->get();

        return view('cooking.show', compact('post', 'comments'));
    }

    public function store(Request $request){
        $title = $request->title;

        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'duration' => ['required', 'in:5,10,15,20,25,30,35,40,45,50,55,60,65,70,75'],
            'description' => ['required','string', 'max:1000'],
        ]);

        $data['title_slug'] = Str::slug($title);
        Auth::user()->cookings()->create($data);
        $cookings = Cooking::all()->reverse();  

        return view('cooking.index', compact('cookings'));
    }


}
