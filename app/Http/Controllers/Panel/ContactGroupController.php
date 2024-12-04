<?php

namespace App\Http\Controllers\Panel;

use App\Models\Contact;
use App\Models\ContactGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactGroups = ContactGroup::where("user_id", auth()->user()->id)->paginate(20);
        return view("panel.contact_groups.index", compact("contactGroups"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.contact_groups.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",

        ]);

        ContactGroup::create([
            "name" => $data["name"],
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route("panel.contact-groups.index")->with("success", "Contact group created successfully");

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactGroup $contactGroup)
    {
        if ($contactGroup->user_id != auth()->user()->id) {
            abort(403);
        }
        return view("panel.contact_groups.edit", compact("contactGroup"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactGroup $contactGroup)
    {

        if ($contactGroup->user_id != auth()->user()->id) {
            abort(403);
        }

        $data = $request->validate([
            "name" => "required",
        ]);

        $contactGroup->update([
            "name" => $data["name"],
        ]);
        return redirect()->route("panel.contact-groups.index")->with("success", "Contact group updated successfully");
        dd("hi"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactGroup $contactGroup)
    {
        if ($contactGroup->user_id != auth()->user()->id) {
            abort(403);
        }
        $contactGroup->delete();
        return redirect()->route("panel.contact-groups.index")->with("success", "Contact group deleted successfully");
    }
}
