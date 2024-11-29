<?php

namespace App\Http\Controllers\site;
use App\Models\Rooms;
class RoomsController
{
    public function rooms() {
        $rooms = Rooms::where('status', 1)->orderBy('seq', 'ASC')->get();
        $active = 'rooms';
        return view('site.rooms', compact('rooms','active'));
    }
    public function rooms_details($id) {
        $room = Rooms::find($id);
        $active = 'rooms';
        return view('site.rooms_details', compact('room','active'));
    }
}
