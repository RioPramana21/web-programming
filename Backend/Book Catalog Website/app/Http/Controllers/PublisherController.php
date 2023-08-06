<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;

class PublisherController extends Controller
{
    public function index()
    {
        return view('publishers',[
            "active" => "publishers",
            "title" => "Publisher List",
            "publishers" => Publisher::paginate(4),
            "categories" => Category::all()
        ]);
    }

    public function show($id)
    {
        $publisher = Publisher::find($id);
        return view('publisher_detail',[
            "active" => "publishers",
            "title" => "Publisher Detail",
            "publisher" => $publisher,
            "books" => $publisher->book()->paginate(4),
            "categories" => Category::all()
        ]);
    }
}
