<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        return view('homepage', [
            "active" => "homepage",
            "title" => "Book List",
            "books" => Book::paginate(4),
            "categories" => Category::all()
        ]);
    }

    public function show($id)
    {
        return view('book_detail',[
            "active" => "homepage",
            "title" => "Book Detail",
            "book" => Book::find($id),
            "categories" => Category::all()
        ]);
    }
}
