<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('publisher.add');
    }

    public function add(Request $request){

        $validate = $request->validate([
            'publisher_name' => 'required|max:50',
            'street_address' => 'required|max:100',
            'post_code' => 'required|max|numeric',
            'state' => 'required'
        ]);

        $publisher = new Genre([
            'publisher_name' => $request->get('name'),
            'street_address' => $request->get('street_address'),
            'post_code' => $request->get('post_code'),
            'state' => $request->get('state')
        ]);
        $publisher->save();
        redirect('/')->with('success', 'genre added');

    }
}
