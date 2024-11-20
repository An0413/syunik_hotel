<?php

namespace App\Http\Controllers\site;
use App\Models\Rooms;
class RoomsController
{
    public function rooms(){
        $rooms = Rooms::where('status', 1)->orderBy('seq', 'ASC')->get();
        return view('site.rooms', compact('rooms'));
    }
    public function rooms_details($id){
        $room = Rooms::find($id);
        return view('site.rooms_details', compact('room'));
    }
}
