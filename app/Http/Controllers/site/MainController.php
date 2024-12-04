<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\About;
use App\Models\AboutDetail;
use App\Models\AboutImages;
use App\Models\Blog;
use App\Models\Comments;
use App\Models\Languages;
use App\Models\Questions;
use App\Models\Rooms;
use App\Models\RoomType;
use App\Models\Services;


class MainController
{
    public function main()
    {
        $lang_id = Languages::where('short_name', app()->getLocale())->first()->id;
        $blog = Blog::where('lang_id', $lang_id)->orderBy('seq', 'ASC')->limit(3)->get();
        $rooms = Rooms::orderBy('seq','ASC')->limit(4)->get();
        $services = Services::orderBy('seq', 'ASC')->get();
        $about = About::all();
        $room_type = RoomType::all();
        $questions = Questions::orderBy('seq', 'DESC')->get();
        $active = 'home';
        return view('site.main', compact('blog', 'rooms', 'services', 'about', 'room_type', 'questions', 'active'));
    }
}
