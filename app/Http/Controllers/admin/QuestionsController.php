<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Questions\StoreRequest;
use App\Http\Requests\Admin\Questions\UpdateRequest;
use App\Models\About;
use App\Models\Rooms;
use App\Models\RoomType;
use http\Env\Request;
use Illuminate\Support\Facades\File;


class QuestionsController extends Controller
{
    public function show()
    {
        $about = About::all();
        return view('admin.about.show', compact('about'));
    }

    public function create()
    {

        return view('admin.about.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        About::create($data);
        return redirect()->route('about_show');
    }

    public function edit($id)
    {
        $about = About::where('id', $id)->first();
        return view('admin.about.edit', compact('about'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        $up_data = $data;

        About::where('id', $id)->update($up_data);

        return redirect()->route('about_show');
    }

    public function destroy($id)
    {
        $about = About::find($id);

        About::where('id', $id)->delete();

        return redirect()->route('about_show');

    }

}
