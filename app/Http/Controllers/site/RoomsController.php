<?php

namespace App\Http\Controllers\site;
use App\Http\Requests\Site\RoomCommentRequest;
use App\Models\RoomComment;
use App\Models\Rooms;
class RoomsController
{
    public function rooms() {
        $rooms = Rooms::where('status', 1)->orderBy('seq', 'ASC')->paginate(6);
        $active = 'rooms';
        return view('site.rooms', compact('rooms','active'));
    }
    public function rooms_details($id) {
        $room = Rooms::find($id);
        $comments = RoomComment::where('room_id', $id)->orderBy('created_at', 'ASC')->get();
        $nestedComments = $this->buildCommentTree($comments);
        $comment_count = count($comments);
        $active = 'rooms';
        return view('site.rooms_details', compact('room','active', 'comments', 'comment_count', 'nestedComments', 'id'));
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

    public function room_comment(RoomCommentRequest $request, $id)
    {
        $data = $request->validated();
        $data['room_id'] = $id;
        RoomComment::create($data);
        return redirect()->route('site_rooms_details', $id);

    }
}
