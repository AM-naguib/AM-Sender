<?php

namespace App\Http\Controllers\Panel;

use App\Models\Device;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessageStatusUpdate;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::where("user_id", auth()->user()->id)->orderBy("created_at", "desc")->with("device")->paginate(30);
        return view("panel.messages.index", compact("messages"));

    }


    public function messagesCallback(Request $request)
    {
        broadcast(new MessageStatusUpdate($request->all()));

     

    }
}
