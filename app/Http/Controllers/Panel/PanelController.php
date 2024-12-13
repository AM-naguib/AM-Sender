<?php

namespace App\Http\Controllers\Panel;


use App\Models\Device;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\MessageTemplate;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        $userStats = auth()->user()->loadCount(['devices', 'messages', 'contacts', 'messageTemplates']);

        return view('panel.index', [
            'devices' => $userStats->devices_count,
            'messages' => $userStats->messages_count,
            'contacts' => $userStats->contacts_count,
            'message_templates' => $userStats->message_templates_count,
        ]);
    }


    public function logs(){
        $logs = Message::where("user_id", auth()->user()->id)->get();
        return view('panel.logs.index', compact("logs"));
    }


    public function profile(){
        $user = auth()->user();
        return view('panel.profile.index', compact("user"));
    }


    public function profileUpdate(Request $request){
        $data = $request->validate([
            "name" => "required",
            "username" => "required|unique:users,username," . auth()->user()->id,
            "phone" => "required|unique:users,phone," . auth()->user()->id,
            "password" => "nullable",
        ]);

        $user = auth()->user();
        $user->name = $data["name"];
        $user->username = $data["username"];
        $user->phone = $data["phone"];
        if($data["password"] != null){
            $user->password = bcrypt($data["password"]);
        }
        $user->save();
        return redirect()->route("panel.profile.index")->with("success", "Profile updated successfully");
    }



    public function authKey(){
        $user = auth()->user();
        return view('panel.auth_key.index', compact("user"));
    }

    public function authKeyUpdate(){
        $user = auth()->user();

        $randomString = bin2hex(random_bytes(32));

        $user->auth_key = $randomString;
        $user->save();
        return redirect()->route("panel.auth_key.index")->with("success", "Auth key updated successfully");
    }
}
