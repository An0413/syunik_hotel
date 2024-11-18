<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rooms\StoreRequest;
use App\Http\Requests\Admin\Rooms\UpdateRequest;
use App\Models\Rooms;
use App\Models\RoomType;
use http\Env\Request;
use Illuminate\Support\Facades\File;


class RoomsController extends Controller
{
    public function show()
    {
        $rooms = Rooms::where('status', 1)->get();
        return view('admin.rooms.show', compact('rooms'));
    }

    public function create()
    {

        $roomtype = RoomType::OrderBy('id', 'asc')->get();
        return view('admin.rooms.create', compact('roomtype'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = 1;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/rooms'), $imageName);
            $data['image'] = $imageName;
            $data['status'] = 1;
        }
        Rooms::create($data);
        return redirect()->route('rooms_show');
    }

    public function edit($id)
    {
        $rooms = Rooms::where('id', $id)->first();
        $roomtype = RoomType::OrderBy('id', 'asc')->get();
        return view('admin.rooms.edit', compact('rooms', 'roomtype'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        $up_data = $data;
        if (isset($data['image'])) {
            $image = $request->file('image');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/rooms'), $imageName);
            $up_data['image'] = $imageName;
        }

        Rooms::where('id', $id)->update($up_data);

        return redirect()->route('rooms_show');
    }

    public function destroy($id)
    {
        $room = Rooms::find($id);
        if (File::exists(public_path('images/rooms') . '/' . $room->image)) {
            File::delete(public_path('images/rooms') . '/' . $room->image);
        }
        Rooms::where('id', $id)->delete();

        return redirect()->route('rooms_show');

    }

}
