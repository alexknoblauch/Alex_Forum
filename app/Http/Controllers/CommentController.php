<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'comment' => ['string', 'max:500', 'required'],
            'commentable_id' => ['integer', 'required'],
            'commentable_type' => ['string', 'required']
        ]);
        
        Auth::user()->comments()->create($data);

        $newComments = Comment::with('user')->where('commentable_id', $data['commentable_id'])->where('commentable_type', $data['commentable_type'])->latest()->get();

        if ($request->expectsJson()){
            return response()->json([
                'new_comments' => $newComments,
                'status' => 'success']
            );
        }
    }
}
