<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreRequest;
use App\Http\Requests\Admin\Blog\UpdateRequest;
use App\Models\Blog;
use App\Models\Comments;
use App\Models\Rooms;
use App\Models\RoomType;
use http\Env\Request;
use Illuminate\Support\Facades\File;


class BlogController extends Controller
{
    public function show()
    {
        $blog_am = Blog::where('lang_id', 1)->get();
        $blog_ru = Blog::where('lang_id', 2)->get();
        $blog_en = Blog::where('lang_id', 3)->get();
        return view('admin.blog.show', compact('blog_am', 'blog_ru', 'blog_en'));
    }

    public function create()
    {

        return view('admin.blog.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/blog'), $imageName);
            $data['image'] = $imageName;
        }
        if ($request->hasFile('video') && $request->file('video')->isValid()) {
            $video = $request->file('video');
            $ext = explode('.', $video->getClientOriginalName());
            $videoName = uniqid() . '.' . end($ext);
            $video->move(public_path('video/blog'), $videoName);
            $data['video'] = $videoName;
        }
        Blog::create($data);
        return redirect()->route('blog_show');
    }

    public function edit($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $blog = Blog::find($id);
        $data = $request->validated();
        $up_data = $data;
        if (isset($data['image'])) {
            $image = $request->file('image');
            $ext = explode('.', $image->getClientOriginalName());
            $imageName = uniqid() . '.' . end($ext);
            $image->move(public_path('images/rooms'), $imageName);
            $up_data['image'] = $imageName;

            File::delete(public_path('images/rooms') . '/' . $blog->image);
        }
        if (isset($data['video'])) {
            $image = $request->file('video');
            $ext = explode('.', $image->getClientOriginalName());
            $videoName = uniqid() . '.' . end($ext);
            $image->move(public_path('video/blog'), $videoName);
            $up_data['video'] = $videoName;

            File::delete(public_path('video/blog') . '/' . $blog->video);
        }

        Blog::where('id', $id)->update($up_data);

        return redirect()->route('blog_show');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        if (File::exists(public_path('images/blog') . '/' . $blog->image)) {
            File::delete(public_path('images/blog') . '/' . $blog->image);
        }
        if (File::exists(public_path('video/blog') . '/' . $blog->video)) {
            File::delete(public_path('video/blog') . '/' . $blog->videos);
        }
        Blog::where('id', $id)->delete();

        return redirect()->route('blog_show');

    }

    public function show_comments($id)
    {
        $comments = Comments::where('blog_id', $id)->get();
        return view('admin.blog.show_comments', compact('comments'));
    }

    public function destroy_comment($id)
    {
        $comment = Comments::find($id);

        Comments::where('id', $id)->delete();

        return redirect()->route('blog_show');

    }

}
