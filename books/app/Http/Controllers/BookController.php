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
        return view('book.create',['book'=>$book]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return '';
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        return '';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        return '';
    }
}