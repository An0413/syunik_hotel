<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rooms\StoreGalleryRequest;
use App\Http\Requests\Admin\Rooms\StoreRequest;
use App\Http\Requests\Admin\Rooms\UpdateGalleryRequest;
use App\Http\Requests\Admin\Rooms\UpdateRequest;
use App\Models\Rooms;
use App\Models\RoomsGallery;
use App\Models\RoomType;
use http\Env\Request;
use Illuminate\Support\Facades\File;


class RoomsGalleryController extends Controller
{
    public function show($id)
    {
        $room = Rooms::where('id', $id)->first();
        $rooms_gallery = RoomsGallery::orderBy('seq', 'asc')->get();
        return view('admin.rooms.images_show', compact('rooms_gallery', 'room', 'id'));
    }

    public function create($id)
    {
        $rooms = Rooms::where('id', $id)->first();
        return view('admin.rooms.images_create', compact('rooms', 'id'));
    }

    public function store(StoreGalleryRequest $request, $id)
    {
        $data = $request->validated();
        $data['room_id'] = $id;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/rooms'), $imageName);
            $data['image'] = $imageName;
        }
        RoomsGallery::create($data);
        return redirect()->route('rooms_images_show', ['id' => $id]);
    }

    public function edit($id)
    {
        $image = RoomsGallery::where('id', $id)->first();
        return view('admin.rooms.images_edit', compact('image'));
    }

    public function update(UpdateGalleryRequest $request, $id)
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

        RoomsGallery::where('id', $id)->update($up_data);
        $gallery = RoomsGallery::where('id', $id)->first();
        return redirect()->route('rooms_images_show', ['id' => $gallery['room_id']]);
    }

    public function destroy($id)
    {
        $gallery = RoomsGallery::find($id);
        if (File::exists(public_path('images/rooms') . '/' . $gallery->image)) {
            File::delete(public_path('images/rooms') . '/' . $gallery->image);
        }
        RoomsGallery::where('id', $id)->delete();
        $room = Rooms::where('id', $gallery['room_id'])->first();
        return redirect()->route('rooms_images_show', [$id => $room->id]);

    }

}
