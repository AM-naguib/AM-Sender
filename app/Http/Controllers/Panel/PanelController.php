<?php

namespace App\Http\Controllers\Panel;


use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index(){


        return view('panel.index');
    }

    public function logs(){
        $logs = Message::where("user_id", auth()->user()->id)->get();
        return view('panel.logs.index', compact("logs"));
    }
}
