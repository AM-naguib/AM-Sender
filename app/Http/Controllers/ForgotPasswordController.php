<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('front.forgot-password');
    }

    public function sendOtp(Request $request)
    {

        $data = $request->validate([
            "username" => "required",
        ]);

        $user = User::where("username", $data["username"])->first();

        if (!$user) {
            return response()->json([
                "status" => false
            ], 200);
        }
        $user->increment('count_sended');


        $otp = mt_rand(100000, 999999);

        Otp::create([
            "otp" => $otp,
            "phone" => $user->phone
        ]);

        $response = Http::post('https://daf6-102-191-236-217.ngrok-free.app/send', [
            'sessionIds' => ['ahmed'],
            'message' => 'Hi ' . $user->name . "\nYour OTP is: " . $otp,
            'phones' => [$user->phone],
            'batchSize' => 2,
            'delayTime' => 5000
        ]);

        return response()->json([
            "status" => true,
        ], 200);
    }

    public function submitOtp(Request $request){

        $data = $request->validate([
            "otp" => "required",
            "username" => "required",
        ]);

        $user = User::where("username", $data["username"])->first();

        if (!$user) {
            return to_route("forgot-password");
        }

        $otp = Otp::where("phone", $user->phone)
        ->where("otp", $data["otp"])
        ->where('created_at', '>=', now()->subMinutes(10)) // التأكد من أن الـ OTP تم إنشاؤه في آخر 10 دقائق
        ->first();

        if (!$otp) {
            return to_route("forgot-password")->with("error", "OTP is incorrect");
        }

        Auth::login($user);
        return to_route("panel.profile.index");


    }
}
