<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function book($room_id) {
        $room_iframe = Book::where('room_id', $room_id)->first()['book_iframe'];
        $active = 'rooms';
        return view('site.book', compact('room_iframe', 'active'));
    }
}
