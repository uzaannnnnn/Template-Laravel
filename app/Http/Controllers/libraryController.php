<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class libraryController extends Controller
{
    public function index()
    {
        $books = Book::all();

        $data = [
            "books" => $books
        ];

        $header = "library";

        return view("main.read", [
            'data' => DB::table('books')->paginate(5),
            'header' => $header,
        ]);
    }

    public function create()
    {
        $header = "Create";
        return view('main.create', compact('header'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:25|string',
            'author' => 'required|max:25|string',
            'publisher' => 'required|max:25|string',
            'published_date' => 'required',
            'stock' => 'required|max:25|string',
        ]);

        $book = Book::create($request->all());
        return redirect('library')->with('success-status', 'Book Added Successfully');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
