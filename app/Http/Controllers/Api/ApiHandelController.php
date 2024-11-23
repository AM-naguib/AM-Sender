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

        $response = Http::get('http://localhost:3000/register', ['sesId' => $device->id]);

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
        dd($request->all());
        
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

        $response = Http::get('http://localhost:3000/send', [
            'sesId' => $device->id,
            'message' => $request->message,
            'phone' => $request->phone,
        ]);




    }



}

