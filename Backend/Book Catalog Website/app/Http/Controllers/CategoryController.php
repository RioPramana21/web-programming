<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::find($id);
        return view('category_detail', [
            "active" => "categories",
            "title" => $category->name,
            "category" => $category,
            "categories" => Category::all(),
            "books" => $category->book()->paginate(4)
        ]);
    }
}
