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

        $blog = Blog::where('status', 1)->get();
        return view('site.blog', compact('blog'));
    }
    public function blog_details(){

        $comment = Comments::where('status', 1)->orderBy('seq', 'ASC')->get();
        $blog_details = Blog::where('status', 1)->get();
        $blog = Blog::where('status', 1)->orderBy('seq', 'DESC')->get();
        return view('site.blog-details', compact('comment', 'blog_details', 'blog'));
    }

    public function comment(CommentRequest $request){

        $data = $request->validated();

        Comments::create($data);

        return redirect()->back();

    }
}
