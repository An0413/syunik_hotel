<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutDetail;
use App\Models\AboutImages;


class BlogController
{
    public function blog(){


        return view('site.blog');
    }

}
