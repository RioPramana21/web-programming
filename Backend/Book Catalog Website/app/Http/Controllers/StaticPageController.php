<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index()
    {
        return view('contact', [
            "active" => "contact",
            "categories" => Category::all()
        ]);
    }
}
