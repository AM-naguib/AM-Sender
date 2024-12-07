<?php

namespace App\Http\Controllers\Panel;

use App\Models\Group;
use App\Models\Device;
use App\Models\Contact;
use App\Models\ContactGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ScrapGroupController extends Controller
{
    public function index()
    {
        $groups = Group::where("user_id", auth()->user()->id)->paginate(20);
        $devices = Device::where("user_id", auth()->user()->id)->where("status", "active")->get();
        return view("panel.groups.index", compact("groups", "devices"));
    }




    public function store(Request $request)
    {
        $data = $request->validate([
            "device" => "required|exists:devices,id",
        ]);

        // استدعاء الـ API
        $response = Http::get(env("SENDER_URL") . '/session/groups/members', [
            'sesId' => $data["device"],
        ]);

        // تحقق من الاستجابة
        if (!$response->successful()) {
            Log::error("Error Scraping group", ['device' => $data["device"], 'response' => $response->body()]);
            return back()->with("error", "Error Scraping group. Status: " . $response->status());
        }

        $groups = json_decode($response->body(), true);

        // تحقق من البيانات المستلمة
        if (empty($groups['groups'])) {
            return back()->with("error", "Group is empty or invalid response");
        }

        foreach ($groups['groups'] as $group) {
            // إنشاء ContactGroup
            $contactGroup = ContactGroup::create([
                "user_id" => auth()->user()->id,
                "name" => $group["name"],
            ]);

            Group::firstOrCreate(
                [
                    "user_id" => auth()->user()->id,
                    "name" => $group["name"],
                ],
                [
                    "device_id" => $groups["sessionId"],
                    "username" => $group["id"],
                    "contact_group_id" => $contactGroup->id,
                ]
            );
            $contactsToCreate = [];
            foreach ($group["participants"] as $member) {

                $phoneNumber = explode('@', $member["id"])[0];
                if (!empty($phoneNumber)) {
                    $contactsToCreate[] = [
                        "contact_group_id" => $contactGroup->id,
                        "phone" => $phoneNumber,
                        "user_id" => auth()->user()->id,
                        "name" => $member["name"] ?? "empty",
                    ];
                }
            }

            if (!empty($contactsToCreate)) {
                Contact::insert($contactsToCreate);
            }
        }

        return back()->with("success", "Group and contacts added successfully!");
    }


    public function update(Request $request, Group $group)
    {
        // تحقق من صلاحية المستخدم
        if ($group->user_id != auth()->user()->id) {
            abort(403, "Unauthorized");
        }

        // استدعاء الـ API مع التعامل مع الأخطاء
        try {
            $response = Http::get(env("SENDER_URL") . '/group/members', [
                'sesId' => $group->device_id,
                'groupId' => $group->username
            ]);

            // تحقق من الاستجابة
            if (!$response->successful()) {
                Log::error("Error Scraping group", ['device' => $group->device_id, 'response' => $response->body()]);
                return back()->with("error", "Error Scraping group. Status: " . $response->status());
            }

            $groupData = json_decode($response->body(), true);

            // تحقق من وجود الأعضاء
            if (empty($groupData['members'])) {
                return back()->with("errors", "Group is empty or invalid response");
            }

            // تحديث بيانات المجموعة
            $group->update([
                "name" => $groupData["groupName"],
            ]);

            foreach ($groupData['members'] as $member) {
                $phoneNumber = explode('@', $member["id"])[0];
                if (!empty($phoneNumber)) {
                    Contact::firstOrCreate([
                        "contact_group_id" => $group->contact_group_id,
                        "phone" => $phoneNumber,
                        "user_id" => auth()->user()->id,
                        "name" => $member["name"] ?? "empty",
                    ]);

                }
            }


        } catch (\Exception $e) {
            // التعامل مع أي أخطاء أثناء الاتصال بالـ API أو العملية
            Log::error("Exception occurred while updating group", ['error' => $e->getMessage()]);
            return back()->with("error", "An error occurred while processing the request.");
        }

        // إرجاع رسالة نجاح
        return back()->with("success", "Group and contacts updated successfully!");
    }



    public function destroy(Group $group)
    {
        if ($group->user_id != auth()->user()->id) {
            abort(403);
        }
        $group->delete();
        return redirect()->route("panel.groups.index")->with("success", "Group deleted successfully");
    }



}
