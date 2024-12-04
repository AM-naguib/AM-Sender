<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ApiHandelController extends Controller
{
    public function registerDevice(Request $request)
    {
        $user = User::where("auth_key", $request->auth_key)->first();
        if (!$user) { {
                return response()->json([
                    "status" => false,
                    "message" => "User not found"
                ]);
            }
        }

        $device = Device::create([
            "name" => $request->name,
            "user_id" => $user->id,
        ]);

        $response = Http::get(env("SENDER_URL").'/register', ['sesId' => $device->id]);

        $res = $response->json();
        if (!isset($res["qrCodeURL"])) {
            return response()->json([
                "status" => false,
                "message" => "Error registering device"
            ]);
        }



        return response()->json([
            "status" => true,
            "message" => "Device registered successfully , please scan the qr code to activate the device",
            "qrCodeURL" => $res["qrCodeURL"],
            "device" => [
                "name" => $device->name,
                "id" => $device->id
            ]

        ]);
    }



    public function sendMessage(Request $request)
    {



        $user = User::where("auth_key", $request->auth_key)->first();

        if (!$user) {
            return response()->json([
                "status" => false,
                "message" => "User not found"
            ]);
        }

        $device = Device::where("user_id", $user->id)->where("id", $request->device_id)->first();

        if (!$device) {
            return response()->json([
                "status" => false,
                "message" => "Device not found"
            ]);
        }


        if ($device->status == "inactive") {
            return response()->json([
                "status" => false,
                "message" => "Device is not active , please activate the device first"
            ]);
        }

        if(!is_array($request->receivers)){
            return response()->json([
                "status" => false,
                "message" => "Receivers must be an array"
            ]);
        }

        if(strlen($request->message) <= 3){

            return response()->json([
                "status" => false,
                "message" => "Message must be at least 3 characters"
            ]);
        }
        $response = Http::post(env("SENDER_URL")."/send", [
            'sesId' => $device->id,
            'message' => $request->message,
            'phones' => $request->receivers,
            'delayTime' => $request->delayTime ?? 1000,
        ]);


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

