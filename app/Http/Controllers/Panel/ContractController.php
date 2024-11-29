<?php

namespace App\Http\Controllers\Panel;

use App\Models\Contract;
use Illuminate\Http\Request;
use App\Models\ContractGroup;
use App\Http\Controllers\Controller;
use App\Imports\ContractsImport;
use Maatwebsite\Excel\Facades\Excel;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts = Contract::where("user_id", auth()->user()->id)->paginate(20);
        $contractGroups = ContractGroup::where("user_id", auth()->user()->id)->get();

        return view("panel.contracts.index", compact("contracts", "contractGroups"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contractGroups = ContractGroup::where("user_id", auth()->user()->id)->get();

        return view("panel.contracts.create", compact("contractGroups"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "phone" => "required",
            "contract_group_id" => "nullable|exists:contract_groups,id",

        ]);


        Contract::create([
            "name" => $data["name"],
            "phone" => $data["phone"],
            "contract_group_id" => $data["contract_group_id"],
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route("panel.contracts.create")->with("success", "Contract created successfully");

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract)
    {
        if ($contract->user_id != auth()->user()->id) {
            abort(403);
        }

        $contractGroups = ContractGroup::where("user_id", auth()->user()->id)->get();
        return view("panel.contracts.edit", compact("contract", "contractGroups"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contract $contract)
    {
        if ($contract->user_id != auth()->user()->id) {
            abort(403);
        }

        $data = $request->validate([
            "name" => "required",
            "phone" => "required",
            "contract_group_id" => "nullable|exists:contract_groups,id",

        ]);

        $contract->update([
            "name" => $data["name"],
            "phone" => $data["phone"],
            "contract_group_id" => $data["contract_group_id"],
        ]);
        return redirect()->route("panel.contracts.index")->with("success", "Contract updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        if ($contract->user_id != auth()->user()->id) {
            abort(403);
        }
        $contract->delete();
        return redirect()->route("panel.contracts.index")->with("success", "Contract deleted successfully");
    }


    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
            'contract_group_id' => 'nullable|exists:contract_groups,id', // التأكد من أن contract_group_id صحيح
        ]);

        $contractGroupId = $request->input('contract_group_id');

        // استيراد البيانات
        $import = new ContractsImport($contractGroupId);

        // تنفيذ الاستيراد
        Excel::import($import, $request->file('file'));

        return back()->with('success', 'تم استيراد البيانات بنجاح!');
    }
}
