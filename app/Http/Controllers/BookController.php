<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repository\BookRepository;
use App\Service\BookService;
use Illuminate\Http\Request;
use App\Helpers\Validate;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        if (request('find')) {
            $books = BookRepository::find(request('find'));
        }
        return view('books.home', [
            'books' => $books
        ]);
    }
    public function create() {
        return view('books.insert');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'book_name' => Validate::bookName(),
    		'author' => Validate::author(),
    		'description' => Validate::description(),
    		'price' => Validate::price()
    	]);
 
        
        BookService::createBook($request);
        // DB::table('books')->insert([
    	// 	'book_name' => $request->book_name,
    	// 	'author' => $request->author,
    	// 	'description' => $request->description,
    	// 	'price' => $request->price
    	// ]);
    	return redirect('/');
    }

    public function edit($id) {
        // $book = Book::find($id);
        // $book = DB::table('books')->where('id', $id)->get();
        // return view('/edit', ['book' => $book]);
        $book = DB::table('books')->where('id', $id)->first();
		return view('books.edit', ['book' => $book]);
    }

    public function update($id, Request $request) {
        $this->validate($request,[
    		'book_name' => Validate::bookName(),
    		'author' => Validate::author(),
    		'description' => Validate::description(),
    		'price' => Validate::price()
    	]);
      
        //  $book = Book::find($id);
        //  $book->book_name = $request->book_name;
        //  $book->author = $request->author;
        //  $book->description = $request->description;
        //  $book->price = $request->price;
        //  $book->save();

        DB::table('books')->where('id', $id)->update([
            'book_name' =>$request->book_name,
            'price' =>$request->price,
            'description' =>$request->description,
            'price' =>$request->price
        ]);
         return redirect('/');
    }

    public function delete($id)
{
    // $book = Book::find($id);
    // $book->delete();
    $book = DB::table('books')->where('id', $id);
    $book->delete();
    return redirect('/');
}
}
