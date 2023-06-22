<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\BorrowBook;
use Illuminate\Http\Request;

class BorrowBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Borrow/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //this is how to put user input into database
    {
        $request->validate([
            'book_id' => 'required',
            'book_title' => 'required',
            'user_id' => 'required',
            'date_borrowed' => 'required',
            'date_return' => 'required',
        ]);

        $borrowBook = new BorrowBook();
        $borrowBook->id = $request->input('book_id');
        $borrowBook->title = $request->input('book_title');
        $borrowBook->user_id = $request->input('user_id');
        $borrowBook->borrowed_on = $request->input('date_borrowed');
        $borrowBook->return_on = $request->input('date_return');
        $borrowBook->save();

        // Store the borrowed book information in the database

        return redirect()->route('books')->with('onSuccess', 'You have successfully borrowed a book');

    }

    /**
     * Display the specified resource.
     */
    public function show(BorrowBook $borrowBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BorrowBook $borrowBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BorrowBook $borrowBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowBook $borrowBook)
    {
        //
    }
}
