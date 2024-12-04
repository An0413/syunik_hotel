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
    public function blog_details($id){

        $comments = Comments::where('blog_id', $id)->orderBy('created_at', 'ASC')->get();
        $nestedComments = $this->buildCommentTree($comments);
        $comment_count = count($comments);
        $blog_details = Blog::where('id', $id)->get();
        $blog = Blog::orderBy('seq', 'DESC')->limit(3)->get();
        return view('site.blog-details', compact('comments', 'blog_details', 'blog', 'id', 'comment_count', 'nestedComments'));
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


    public function comment(CommentRequest $request, $id){
        $data = $request->validated();
        $data['blog_id'] = $id;
        Comments::create($data);

        return redirect()->route('blog_details', $id);

    }
}
