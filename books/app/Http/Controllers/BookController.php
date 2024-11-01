<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        // $books= Book::query()->orderBy('id')->paginate();
        return view('book.index', ['books' =>$books]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'autors' => $request->autors,
            'release_date' => $request->release_date,
        ];

        Book::create($data);
        return redirect('/book');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $book = Book::find($id); // Fetch the book by its ID
    return view('book.edit', ['book' => $book]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $data = [
            'title' => $request->title,
            'autors' => $request->autors,
            'release_date' => $request->release_date,
        ];

        $book->update($data);
        return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect("/book");
    }
}
