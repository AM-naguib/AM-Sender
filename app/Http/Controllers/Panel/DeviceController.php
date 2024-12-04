<?php

namespace App\Http\Controllers\Panel;


use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DeviceController extends Controller
{
    public function index(){
        $devices = Device::where("user_id", auth()->user()->id)->get();
        return view("panel.devices.index", compact("devices"));
    }

    public function create(){
        return view("panel.devices.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            "name" => "required",
        ]);

        $device = Device::create([
            "name" => $data["name"],
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route("panel.devices.scan", $device->id);
    }


    public function edit(Device $device){
        if($device->user_id != auth()->user()->id){
            abort(403);
        }
        return view("panel.devices.edit", compact("device"));
    }

    public function update(Request $request,Device $device){
        if($device->user_id != auth()->user()->id){
            abort(403);
        }

        $data = $request->validate([
            "name" => "required",
        ]);

        $device->update([
            "name" => $data["name"],
        ]);
        return redirect()->route("panel.devices.index");
    }

    public function destroy(Device $device){
        if($device->user_id != auth()->user()->id){
            abort(403);
        }
        $device->delete();
        return redirect()->route("panel.devices.index");
    }


    public function scan(Device $device){
        if($device->user_id != auth()->user()->id){
            abort(403);
        }
        $url = env("SENDER_URL").'/register';
        $params = [
            'sesId' => $device->id
        ];


        $response = Http::get($url, $params);


        if ($response->successful()) {
            $res =  $response->json();
        }


        return view("panel.devices.scan", compact("device", "res"));
    }






}
