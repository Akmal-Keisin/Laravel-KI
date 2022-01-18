<?php 
namespace App\Service;
use App\Repository\BookRepository;
use App\Models\Book;


class BookService {
    public static function createBook($request) {
        $book = new Book();
        $book->book_name = $request->book_name;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->save();
    }
}