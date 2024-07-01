<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class libraryController extends Controller
{
    public function index()
    {
        $books = Book::all();

        $data = [
            "books" => $books
        ];

        $header = "Library";

        return view("main.index", [
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
        return redirect('book')->with('success-status', 'Book Added Successfully');
    }


    public function show(string $id)
    {
        $books = Book::findOrFail($id);
        return view('main.show', ['showpage' => $books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('main.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ekskul = Book::findOrFail($id);
        $ekskul->update($request->all());
        if ($ekskul) {
            Session::flash('success-status', 'success');
            Session::flash('success-message', 'Update Book Success');
        }
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bookDelete = Book::findOrFail($id);
        $bookDelete->delete();

        if ($bookDelete) {
            Session::flash('delete-status', 'success');
            Session::flash('delete-message', 'Delete Book Success');
        }
        return redirect('book');
    }

    public function search(Request $request)
    {
        $query = DB::table('books');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'LIKE', "%{$search}%")
                ->orWhere('author', 'LIKE', "%{$search}%")
                ->orWhere('publisher', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate(5);
        $header = "Library";

        $search = $request->input('search', '');

        return view("main.show", compact('data', 'header', 'search'));
    }

    public function exportPdf()
    {
        $data = Book::all();
        $header = 'Library';
        $pdf = Pdf::loadView('pdf.export-pdf', compact('data', 'header'));
        return $pdf->download('library-books' . Carbon::now()->timestamp . '.pdf');
    }
}
