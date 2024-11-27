<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Profile\UpdateRequest;
use App\Models\Rooms;
use App\Models\RoomType;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function show()
    {
        $admin = Auth::user();
        $user = User::where('id', $admin->id)->first();
        return view('admin.profile.show', compact('user'));
    }

    public function edit($id)
    {
        $admin = Auth::user();
        $user = User::where('id', $admin->id)->first();
        return view('admin.profile.edit', compact('user'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        $up_data = $data;
        if (isset($data['image'])) {
            $image = $request->file('image');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/profile'), $imageName);
            $up_data['image'] = $imageName;
        }

        User::where('id', $id)->update($up_data);

        return redirect()->route('profile');
    }

}
