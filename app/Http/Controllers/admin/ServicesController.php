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
        $data = $request->validated();
        $up_data = $data;

        Services::where('id', $id)->update($up_data);

        return redirect()->route('services_show');
    }

    public function destroy($id)
    {
        $services = Services::find($id);

        Services::where('id', $id)->delete();

        return redirect()->route('services_show');

    }

}
