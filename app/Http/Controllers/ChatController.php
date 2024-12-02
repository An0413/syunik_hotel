<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $ins_data = [
            'sender_type' => $request->sender_type,
            'message' => $request->message,
        ];

        $message = Message::create($ins_data);

        broadcast(new \App\Events\MessageSent($message))->toOthers();

        return response()->json(['status' => 'Message sent!', 'message' => $message]);
    }

    public function getMessages()
    {
        return Message::latest()->get();
    }
}
