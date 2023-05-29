<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function filter($id){
        // $books = Category::find($id)->Book;
        $books = Book::where('category_id','=',$id)->get();

        return view('home', compact('books'));
    }
}
