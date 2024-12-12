<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SignupController extends Controller
{
    public function index()
    {
        return view('front.signup');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "username" => "required|unique:users,username",
            "phone" => "required|unique:users,phone",
            "password" => "required",
        ]);

        $rand = false;
        $randomString = "";
        while (!$rand) {
            $randomString = bin2hex(random_bytes(32));
            $user = User::where("auth_key", $randomString)->first();
            if (!$user) {
                $rand = true;
            }
        }

        $user = User::create([
            "name" => $data["name"],
            "username" => $data["username"],
            "phone" => $data["phone"],
            "password" => bcrypt($data["password"]),
            "auth_key" => $randomString,
        ]);

        Auth::login($user);

        return redirect()->route("login")->with("success", "Account created successfully");

    }
}
