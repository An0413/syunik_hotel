<?php

namespace App\Http\Controllers\site;
use App\Models\Rooms;
class RoomsController
{
    public function rooms(){

        $rooms = Rooms::all();
        return view('site.rooms', compact('rooms'));
    }
}
