<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Models\ContractGroup;
use App\Http\Controllers\Controller;

class ContractGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contractGroups = ContractGroup::where("user_id", auth()->user()->id)->paginate(20);
        return view("panel.contract_groups.index", compact("contractGroups"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.contract_groups.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",

        ]);

        ContractGroup::create([
            "name" => $data["name"],
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route("panel.contract-groups.index")->with("success", "Contract group created successfully");

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContractGroup $contractGroup)
    {
        if($contractGroup->user_id != auth()->user()->id){
            abort(403);
        }
        return view("panel.contract_groups.edit", compact("contractGroup"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContractGroup $contractGroup)
    {
        if($contractGroup->user_id != auth()->user()->id){
            abort(403);
        }

        $data = $request->validate([
            "name" => "required",
        ]);

        $contractGroup->update([
            "name" => $data["name"],
        ]);
        return redirect()->route("panel.contract-groups.index")->with("success", "Contract group updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContractGroup $contractGroup)
    {
        if($contractGroup->user_id != auth()->user()->id){
            abort(403);
        }
        $contractGroup->delete();
        return redirect()->route("panel.contract-groups.index")->with("success", "Contract group deleted successfully");
    }
}
