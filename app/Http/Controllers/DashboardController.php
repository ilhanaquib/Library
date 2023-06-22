<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\BorrowBook;
use App\Models\Book;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $borrowedBooks = BorrowBook::where('user_id', $user->id)->get();
        $index = 0;
        
        return Inertia::render('Dashboard', [
            'books' => $borrowedBooks,
            'index' => $index,
        ]);
    }
}
