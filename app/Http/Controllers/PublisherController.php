<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        $publisher = Publisher::all();

        return view('publisher', compact('publisher'));
    }
    public function show($id){
        $publisher = Publisher::find($id);
        $books = Book::where('publisher_id','=',$id)->get();

        return view('publisherdetail', compact('publisher','books'));
    }
}
