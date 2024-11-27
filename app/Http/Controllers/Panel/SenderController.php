<?php

namespace App\Http\Controllers\Panel;

use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Log;

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

        return view("panel.sender.bulk", compact("devices"));
    }


    public function send(Request $request)
    {


        $data = $request->validate([
            "device_id" => "required",
            "receivers" => "required",
            "message" => "required|string|min:3"
        ]);

        $device = Device::where("id", $request->device_id)->first();

        if($device->user_id != auth()->user()->id){
            return back()->with("error", "Device not found");
        }


        if($device->status != "active"){
            return back()->with("error", "Device is not active");
        }

        
        $receivers = $this->changeReceiversToArray($request->receivers);
        


        $response = Http::post('http://localhost:3000/send', [
            'sesId' => $device->id,
            'message' => $request->message,
            'phones' => $receivers,
            'delayTime' => $request->delayTime ?? 1000,
        ]);

        return back()->with("success", "Message sent successfully");

    }

public function messageCallback(Request $request){

    $data = $request->validate([
        "sessionId" => "required|exists:devices,id",
        "message"=>"required",
        "to"=>"required",
        "from"=>"required",
        "status"=>"required",
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
