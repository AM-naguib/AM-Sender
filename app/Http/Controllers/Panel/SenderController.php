<?php

namespace App\Http\Controllers\Panel;

use Log;
use App\Models\Device;
use App\Models\Message;
use App\Models\ContactGroup;
use Illuminate\Http\Request;

use App\Models\MessageTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class SenderController extends Controller
{
    public function index()
    {
        return view("panel.sender.index", compact("devices"));
    }

    public function single()
    {
        $devices = Device::where("user_id", auth()->user()->id)->where("status", "active")->get();

        return view("panel.sender.single", compact("devices"));
    }


    public function bulkSend()
    {
        $devices = Device::where("user_id", auth()->user()->id)->where("status", "active")->get();
        $messageTemplates = MessageTemplate::where("user_id", auth()->user()->id)->get();
        $contactGroups = ContactGroup::where("user_id", auth()->user()->id)->with("contacts")->get();

        return view("panel.sender.bulk", compact("devices", "contactGroups", "messageTemplates"));
    }


    public function send(Request $request)
    {

        $data = $request->validate([
            "device_ids" => "required",
            "receivers" => "required",
            "message" => "required|string|min:3",
            "delay_time" => "nullable|numeric"
        ]);



        $devices = Device::whereIn('id', $request->device_ids)
        ->where('user_id', auth()->user()->id)
        ->where('status', 'active')
        ->get();

        if ($devices->count() != count($request->device_ids)) {
            return back()->with("error", "One or more devices are either not found, not owned by the user, or not active.");
        }

        $deley_time = $request->delay_time * 1000 ?? rand(1000, 2500);






        $receivers = $this->changeReceiversToArray($request->receivers);

        $receivers = array_map('trim', $receivers);


        $response = Http::post(env("SENDER_URL") . '/send', [
            'sessionIds' => $request->device_ids,
            'message' => $request->message,
            'phones' => $receivers,
            'delayTime' => $deley_time,
        ]);

        if ($response->failed()) {
            return back()->with("error", "Failed to send message");
        }

        return back()->with("success", "Message sent successfully");

    }



    public function messageCallback(Request $request)
    {

        $data = $request->validate([
            "sessionId" => "required|exists:devices,id",
            "message" => "required",
            "to" => "required",
            "from" => "required",
            "status" => "required",
        ]);

        Log::info($data);
    }


    public function changeReceiversToArray($receivers)
    {
        if (is_array($receivers)) {
            return $receivers;
        }
        $cleaned_receivers = preg_replace('/\s+/', '', $receivers);

        $receivers_array = preg_split('/[,\\r\\n]/', $receivers, -1, PREG_SPLIT_NO_EMPTY);
        return $receivers_array;
    }





}
