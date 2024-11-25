<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Services\StoreRequest;
use App\Http\Requests\Admin\Services\UpdateRequest;
use App\Models\About;
use App\Models\Rooms;
use App\Models\RoomType;
use App\Models\Services;
use http\Env\Request;
use Illuminate\Support\Facades\File;


class ServicesController extends Controller
{
    public function show()
    {
        $services = Services::orderBy('seq', 'asc')->get();
        return view('admin.services.show', compact('services'));
    }

    public function create()
    {

        return view('admin.services.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
            $image = $request->file('icon');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/services'), $imageName);
            $data['icon'] = $imageName;
        }

        Services::create($data);
        return redirect()->route('services_show');
    }

    public function edit($id)
    {
        $services = Services::where('id', $id)->first();
        return view('admin.services.edit', compact('services'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $services = Services::find($id);
        $data = $request->validated();
        $up_data = $data;
        if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
            $image = $request->file('icon');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/services'), $imageName);
            $up_data['icon'] = $imageName;

            File::delete(public_path('images/services') . '/' . $services->icon);
        }


        Services::where('id', $id)->update($up_data);

        return redirect()->route('services_show');
    }

    public function destroy($id)
    {
        $services = Services::find($id);

        if (File::exists(public_path('images/services') . '/' . $services->icon)) {
            File::delete(public_path('images/services') . '/' . $services->icon);
        }
        Services::where('id', $id)->delete();

        return redirect()->route('services_show');

    }

}
