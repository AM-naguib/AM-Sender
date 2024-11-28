<?php

namespace App\Http\Controllers\Panel;


use App\Models\Device;
use App\Models\MessageTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MessageTemplateController extends Controller
{
    public function index(){
        $templates = MessageTemplate::where("user_id", auth()->user()->id)->paginate(20);
        return view("panel.message_templates.index", compact("templates"));
    }

    public function create(){
        return view("panel.message_templates.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            "name" => "required",
            "message" => "required",
        ]);

        $template = MessageTemplate::create([
            "name" => $data["name"],
            "message" => $data["message"],
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route("panel.massage-templates.index")->with("success", "Message template created successfully");
    }


    public function edit(MessageTemplate $massage_template){
        if($massage_template->user_id != auth()->user()->id){
            abort(403);
        }
        return view("panel.message_templates.edit", compact("massage_template"));
    }

    public function update(Request $request,MessageTemplate $massage_template){
        if($massage_template->user_id != auth()->user()->id){
            abort(403);
        }

        $data = $request->validate([
            "name" => "required",
            "message" => "required",
        ]);

        $massage_template->update([
            "name" => $data["name"],
            "message" => $data["message"],
        ]);
        return redirect()->route("panel.massage-templates.index")->with("success", "Message template updated successfully");
    }

    public function destroy(MessageTemplate $massage_template){
        if($massage_template->user_id != auth()->user()->id){
            abort(403);
        }
        $massage_template->delete();
        return redirect()->route("panel.massage-templates.index")->with("success", "Message template deleted successfully");
    }








}
