<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rooms\StoreRequest;
use http\Env\Request;

class RoomsController extends Controller
{
    public function show(){
        return view('admin.rooms.show');
    }

    public function create(){
        return view('admin.rooms.create');
    }

    public function store(StoreRequest $request){
        print_r(1);
        $data = $request->validated();
//        print_r($data);
    }

}
