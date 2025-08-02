<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Comment;

class BookController extends Controller
{

    public function index(){
        $books = Book::all();
        $authors = Author::pluck('author');

        return view('book.index', compact('books', 'authors'));
    }

    public function show($slug){
        $book = Book::where('title_slug', $slug)->firstOrFail();
        $comments = Comment::where('commentable_id', $book->id)->get();
        
        return view('book.show', compact('book', 'comments'));
    }
}
