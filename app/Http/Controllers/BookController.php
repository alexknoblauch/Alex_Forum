<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Comment;
use Illuminate\Support\Str;


class BookController extends Controller
{

    public function index(){
        $books = Book::latest()->get();
        $authors = Author::pluck('author');

        return view('book.index', compact('books', 'authors'));
    }

    public function show($slug){
        $book = Book::where('title_slug', $slug)->firstOrFail();
        $comments = Comment::where('commentable_id', $book->id)->where('commentable_type', 'App\\Models\\Book')->latest()->get();
        
        return view('book.show', compact('book', 'comments'));
    }

    public function store(Request $request){

        ##HTTP Request
        $data = $request->validate([
            'title' => ['max:70', 'string', 'required'],
            'cathegory' => ['max:30', 'string', 'required'],
            'seiten' => ['integer', 'required'],
            'description' => ['max:2000', 'string', 'required'],
            'author' => ['string', 'max:100', 'required']
        ]);

        $data['title_slug'] = Str::slug($data['title']);
        $author = Author::firstOrCreate(['author' => trim($data['author'])]);
        $data['author_id'] = $author->id;

        unset($data['author']);

        Book::create([
        'title' => $data['title'],
        'cathegory' => $data['cathegory'],
        'seiten' => $data['seiten'], 
        'description' => $data['description'],
        'title_slug' => Str::slug($data['title']),
        'author_id' => $author->id,
    ]);

        ##HTTP Response
        return redirect()->route('book.index');
    }
}
