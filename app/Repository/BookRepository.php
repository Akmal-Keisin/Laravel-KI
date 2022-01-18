<?php 
namespace App\Repository;
use App\Models\Book;

class BookRepository {  
    public static function find($title) {
        $result = Book::where('book_name', 'like', '%' . request('find') . '%')->get();
        return $result;
    }
}
