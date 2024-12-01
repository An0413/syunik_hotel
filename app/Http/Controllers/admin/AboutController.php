<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\About\StoreDetailRequest;
use App\Http\Requests\Admin\About\StoreImagesRequest;
use App\Http\Requests\Admin\About\StoreRequest;
use App\Http\Requests\Admin\About\UpdateDetailRequest;
use App\Http\Requests\Admin\About\UpdateImagesRequest;
use App\Http\Requests\Admin\About\UpdateRequest;
use App\Models\About;
use App\Models\AboutDetail;
use App\Models\AboutImages;
use App\Models\Rooms;
use App\Models\RoomType;
use http\Env\Request;
use Illuminate\Support\Facades\File;


class AboutController extends Controller
{
    public function show()
    {
        $about = About::all();
        $about_details = AboutDetail::all();
        $images = AboutImages::all();
        return view('admin.about.show', compact('about','about_details','images'));
    }

    public function create()
    {

        return view('admin.about.create');
    }

    public function create_details()
    {
        return view('admin.about.create_details');
    }

    public function create_images()
    {
        return view('admin.about.create_images');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        About::create($data);
        return redirect()->route('about_show');
    }

    public function store_details(StoreDetailRequest $request)
    {
        $data = $request->validated();

        AboutDetail::create($data);
        return redirect()->route('about_show');
    }

    public function store_images(StoreImagesRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/about'), $imageName);
            $data['image'] = $imageName;
        }

        AboutImages::create($data);
        return redirect()->route('about_show');
    }

    public function edit($id)
    {
        $about = About::where('id', $id)->first();
        return view('admin.about.edit', compact('about'));
    }

    public function edit_details($id)
    {
        $about_details = AboutDetail::where('id', $id)->first();
        return view('admin.about.edit_details', compact('about_details'));
    }

    public function edit_images($id)
    {
        $about_images = AboutImages::where('id', $id)->first();
        return view('admin.about.edit_images', compact('about_images'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        $up_data = $data;

        About::where('id', $id)->update($up_data);

        return redirect()->route('about_show');
    }

    public function update_details(UpdateDetailRequest $request, $id)
    {
        $data = $request->validated();
        $up_data = $data;

        AboutDetail::where('id', $id)->update($up_data);

        return redirect()->route('about_show');
    }

    public function update_images(UpdateImagesRequest $request, $id)
    {
        $data = $request->validated();
        $up_data = $data;
        $about_images = AboutImages::where('id', $id)->first();

        if (isset($data['image'])) {
            $image = $request->file('image');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/about'), $imageName);
            $up_data['image'] = $imageName;

            File::delete(public_path('images/about') . '/' . $about_images->image);
        }

        AboutImages::where('id', $id)->update($up_data);

        return redirect()->route('about_show');
    }

    public function destroy($id)
    {
        $about = About::find($id);

        About::where('id', $id)->delete();

        return redirect()->route('about_show');

    }
    public function destroy_details($id)
    {
        $about_details = AboutDetail::find($id);

        AboutDetail::where('id', $id)->delete();

        return redirect()->route('about_show');

    }

    public function destroy_images($id)
    {

        $about_images = AboutImages::find($id);

        AboutImages::where('id', $id)->delete();
        if (File::exists(public_path('images/about') . '/' . $about_images->image)) {
            File::delete(public_path('images/about') . '/' . $about_images->image);
        }

        return redirect()->route('about_show');

    }

}
