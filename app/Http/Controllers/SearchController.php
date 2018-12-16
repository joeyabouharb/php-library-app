<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    public function result(Request $request){

        $validation = $request->validate([
            'query' => 'required'
        ]);

         $q = $request->get('query');

        $books = Db::table('books')
        ->where('title', 'like', "%{$q}%")
        ->paginate(4);
        $books->withPath("/search/result?query={$q}");

        return view('search.result')->with('books', $books);
    }

}
