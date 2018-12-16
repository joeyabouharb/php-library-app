<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $books = Book::orderBy('title', 'asc')->paginate(4);

    return view('home.index')->with('books', $books);
    }
}
