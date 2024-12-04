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


class BlogController
{
    public function blog(){
        $lang_id = Languages::where('short_name', app()->getLocale())->first()->id;
        $blog = Blog::where('lang_id', $lang_id)->orderBy('seq', 'ASC')->get();
        $active = 'blog';
        return view('site.blog', compact('blog','active'));
    }
    public function blog_details($id){

        $comments = Comments::orderBy('seq', 'ASC')->get();
        $blog_details = Blog::where('id', $id)->get();
        $blog = Blog::orderBy('seq', 'DESC')->limit(3)->get();
        $active = 'blog';
        return view('site.blog-details', compact('comments', 'blog_details', 'blog','active'));
    }

    public function comment(CommentRequest $request){

        $data = $request->validated();

        Comments::create($data);

        return redirect()->back();

    }
}
