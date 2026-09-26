<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        Book::create($validated);

        return response('', 303)
    ->header('Location', '/books');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

       public function update(Request $request, Book $book)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'published_year' => 'required|integer',
        'description' => 'nullable|string',
    ]);

    $book->update($validated);

    session()->flash('success', 'Book updated successfully!');

    return response('', 303)
        ->header('Location', '/books');
}

        public function destroy(Book $book)
    {
        $book->delete();

        session()->flash('success', 'Book deleted successfully!');

        return response('', 303)
            ->header('Location', '/books');
    }
}