<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('genre.create');
    }

    public function add(Request $request){

        $validate = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required|max:100'
        ]);

        $genre = new Genre([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);

        $genre->save();

        redirect('/')->with('success', 'genre added');

    }
}
