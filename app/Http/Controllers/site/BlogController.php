<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\About;
use App\Models\AboutDetail;
use App\Models\AboutImages;
use App\Models\Blog;
use App\Models\Comments;


class BlogController
{
    public function blog(){

        $blog = Blog::orderBy('seq', 'ASC')->get();
        return view('site.blog', compact('blog'));
    }
    public function blog_details(){

        $comment = Comments::orderBy('seq', 'ASC')->get();
        $blog_details = Blog::orderBy('seq', 'DESC')->get();
        $blog = Blog::orderBy('seq', 'DESC')->get();
        return view('site.blog-details', compact('comment', 'blog_details', 'blog'));
    }

    public function comment(CommentRequest $request){

        $data = $request->validated();

        Comments::create($data);

        return redirect()->back();

    }
}
