<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutDetail;
use App\Models\AboutImages;


class AboutController
{
    public function about(){

        $info = About::all();
        $about_image = AboutImages::orderBy('seq', 'ASC')->get();
        $detail = AboutDetail::all();
        $active = 'about';
        return view('site.about', compact('info', 'about_image', 'detail','active'));
    }

}
