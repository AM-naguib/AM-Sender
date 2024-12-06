<?php

namespace App\Http\Controllers\Panel;

use App\Models\Contact;
use App\Models\ContactGroup;
use Illuminate\Http\Request;
use App\Imports\ContactsImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::where("user_id", auth()->user()->id)->paginate(20);
        $contactGroups = ContactGroup::where("user_id", auth()->user()->id)->get();

        return view("panel.contacts.index", compact("contacts", "contactGroups"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contactGroups = ContactGroup::where("user_id", auth()->user()->id)->get();

        return view("panel.contacts.create", compact("contactGroups"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "phone" => "required",
            "contact_group_id" => "nullable|exists:contact_groups,id",

        ]);


        Contact::create([
            "name" => $data["name"],
            "phone" => $data["phone"],
            "contact_group_id" => $data["contact_group_id"],
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route("panel.contacts.create")->with("success", "Contact created successfully");

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        if ($contact->user_id != auth()->user()->id) {
            abort(403);
        }

        $contactGroups = ContactGroup::where("user_id", auth()->user()->id)->get();
        return view("panel.contacts.edit", compact("contact", "contactGroups"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        if ($contact->user_id != auth()->user()->id) {
            abort(403);
        }

        $data = $request->validate([
            "name" => "required",
            "phone" => "required",
            "contact_group_id" => "nullable|exists:contact_groups,id",

        ]);

        $contact->update([
            "name" => $data["name"],
            "phone" => $data["phone"],
            "contact_group_id" => $data["contact_group_id"],
        ]);
        return redirect()->route("panel.contacts.index")->with("success", "Contact updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        if ($contact->user_id != auth()->user()->id) {
            abort(403);
        }
        $contact->delete();
        return redirect()->route("panel.contacts.index")->with("success", "Contact deleted successfully");
    }


    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
            'contact_group_id' => 'nullable|exists:contact_groups,id',
        ]);
        $contactGroupId = $request->input('contact_group_id');


        $import = new ContactsImport($contactGroupId);

        Excel::import($import, $request->file('file'));

        return back()->with('success', 'تم استيراد البيانات بنجاح!');
    }
}
