<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\About;
use App\Models\AboutDetail;
use App\Models\AboutImages;
use App\Models\Blog;
use App\Models\Comments;


class MainController
{
public function main(){
    $blog = Blog::where('status', 1)->get();
    return view('site.layout.layout', compact('blog'));
}
}
