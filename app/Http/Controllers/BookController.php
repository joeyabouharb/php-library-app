<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Genre;
use App\Publisher;

use Illuminate\Support\Facades\DB;
class BookController extends Controller
{


     static $validationBook = array(
        'ISBN' => 'required|regex:/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/|unique:books,ISBN',
        'title' => 'required|max:126',
        'first_name' => 'required|max:30',
        'last_name' => 'required|max:30',
        'genre_id' => 'required|numeric',
        'publisher_id' => 'required|numeric'
    );
  
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['details']]);    
        $this->middleware('admin');
    }
   public function details($id){

    $book = DB::table('books')->where('ISBN', $id)->first();
    $genreId = $book->genre_id;
    $genre = DB::table('genres')->where('id', $genreId)->pluck('name')->first();
    $publisherId = $book->publisher_id;
    $publisher = DB::table('publishers')->where('id', $publisherId)->pluck('publisher_name')->first();

    $data = array('book' => $book,
                    'genre' => $genre,
                'publisher' => $publisher);

            return view('book.details')->with('data', $data);
    }

    public function create(){
        
     $publishers = DB::table('publishers')->select('id', 'publisher_name')->get();
     $genres = DB::table('genres')->select('id', 'name')->get();

        return view('book.create', compact('publishers', 'genres'));
    }

    public function add(Request $request){
             $validate= $request->validate(BookController::$validationBook); 

            $book = new Book([
                'ISBN' => $request->get('ISBN'),
                'title' => $request->get('title'),
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'genre_id' => $request->get('genre_id'),
                'publisher_id' => $request->get('publisher_id')
            ]);
            $book->save();
             return redirect('/home')->with('success', 'Book has been added');
    }

    public function edit($ISBN){
       $book = DB::table('books')
        ->where('ISBN', $ISBN)
        ->first();

        $genreId = $book
        ->genre_id;

        $genre = DB::table('genres')
        ->where('id', $genreId)
        ->pluck('name')->first();

        $publisherId = $book
        ->publisher_id;

        $publisher = DB::table('publishers')
        ->where('id', $publisherId)
        ->pluck('publisher_name')
        ->first();
    
        $publishers = DB::table('publishers')->select('id', 'publisher_name')->get();
        $genres = DB::table('genres')->select('id', 'name')->get();
        $selected = '';
        return view('book.edit',
         compact('publisher',
          'genre',
           'book',
            'genres', 
            'publishers',
            'selected'
        ));
    }

    
    public function saveChanges(Request $request){
        $validate= $request
        ->validate(BookController::$validationBook); 

        $ISBN = $request->get('ISBN');
       $book = Book::findOrFail($ISBN);
       
       $book->title = $request->get('title');
       $book->first_name = $request->get('first_name');
       $book->last_name = $request->get('last_name');
       $book->genre_id = $request->get('genre_id');
       $book->publisher_id = $request->get('publisher_id');
     
       $book->save();

        return redirect('/home')
        ->with('success', 'Book Details have been changed');
}

public function delete(Request $request){

    $ISBN = $request->get('ISBN');
    $book = Book::findOrFail($ISBN);

    $book = Book::destroy($ISBN);

    return redirect('/home')
    ->with('success', 'Book Successfully deleted');

}


}
