<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::all();

        $data = [
            "books" => $books
        ];
        return view('book.index', $data);
    }
}
