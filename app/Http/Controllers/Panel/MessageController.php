<?php

namespace App\Http\Controllers\Panel;

use App\Models\Device;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessageStatusUpdate;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $query = Message::where("user_id", auth()->user()->id)->orderBy("created_at", "desc")->with("device");

        if($request->device != null){
            $query->where("device_id", $request->device);
        }
        if ($request->from != null && $request->to != null) {
            $query->whereDate("created_at", '>=', $request->from)
                  ->whereDate("created_at", '<=', $request->to);
        }
        $messages = $query->paginate(20);



        $devices = Device::where("user_id", auth()->user()->id)->get();
        return view("panel.messages.index", compact("messages", "devices"));

    }


    public function messagesCallback(Request $request)
    {
        broadcast(new MessageStatusUpdate($request->all()));



    }
}
