<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\About;
use App\Models\AboutDetail;
use App\Models\AboutImages;
use App\Models\Blog;
use App\Models\Comments;
use App\Models\Rooms;
use App\Models\RoomType;
use App\Models\Services;


class MainController
{
    public function main()
    {

        $blog = Blog::all();
        $rooms = Rooms::all();
        $services = Services::orderBy('seq', 'ASC')->get();
        $about = About::all();
        $room_type = RoomType::all();
        return view('site.main', compact('blog', 'rooms', 'services', 'about', 'room_type'));
    }
}
