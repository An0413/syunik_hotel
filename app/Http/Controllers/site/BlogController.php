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
    public function blog()
    {
        $lang_id = Languages::where('short_name', app()->getLocale())->first()->id;
        $blog = Blog::where('lang_id', $lang_id)->orderBy('seq', 'ASC')->get();
        $active = 'blog';
        return view('site.blog', compact('blog', 'active'));
    }

    public function blog_details($id)
    {
        $lang_id = Languages::where('short_name', app()->getLocale())->first()->id;
        $blog_detail = Blog::where('id', $id)->where('lang_id', $lang_id)->first();
        if (!$blog_detail) {
            return redirect()->route('blog');
        }
        $comments = Comments::where('blog_id', $id)->orderBy('created_at', 'ASC')->get();
        $nestedComments = $this->buildCommentTree($comments);
        $comment_count = count($comments);
        $blog = Blog::orderBy('seq', 'DESC')->limit(3)->get();
        $meta_desc = $blog_detail->meta_description;
        $meta_keys = $blog_detail->meta_keyword;
        $active = 'blog';
        return view('site.blog-details', compact('comments', 'blog_detail', 'blog', 'id', 'comment_count', 'nestedComments', 'active', 'meta_desc', 'meta_keys'));
    }

    private function buildCommentTree($comments, $parentId = null)
    {
        $tree = [];

        foreach ($comments as $comment) {
            if ($comment->parent_id == $parentId) { // Use object property access
                // Recursively find children
                $children = $this->buildCommentTree($comments, $comment->id);
                if ($children) {
                    $comment->replies = $children; // Add children as 'replies'
                }

                $tree[] = $comment; // Add the comment to the tree
            }
        }

        return $tree;
    }


    public function comment(CommentRequest $request, $id)
    {
        $data = $request->validated();
        $data['blog_id'] = $id;
        Comments::create($data);

        return redirect()->route('blog_details', $id);

    }
}
