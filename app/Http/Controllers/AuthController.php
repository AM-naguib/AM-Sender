<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginStore(Request $request){

        $data = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if(auth()->attempt(["username" => $data["username"], "password" => $data["password"]])){
            return redirect()->route("panel.index");
        }
        return back()->with("error", "Username or password is incorrect");
    }

    public function logout(){
        auth()->logout();
        return redirect()->route("login");
    }
}
