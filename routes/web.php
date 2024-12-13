<?php

use Illuminate\Http\Request;
use App\Events\SessionStatusEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\DeviceController;
use App\Http\Controllers\Panel\SenderController;
use App\Http\Controllers\Panel\ContactController;
use App\Http\Controllers\Panel\MessageController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Panel\ScrapGroupController;
use App\Http\Controllers\Panel\ContactGroupController;
use App\Http\Controllers\Panel\MessageTemplateController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    \broadcast(new SessionStatusEvent(request("session")));

    return view('welcome');
});



Route::prefix("panel")->name("panel.")->middleware("auth")->group(function () {
    Route::get("/", [PanelController::class, "index"])->name("index");

    Route::get("/index", [PanelController::class, "index"])->name("index");



    Route::resource("devices", DeviceController::class)->except("show");

    Route::resource("message-templates", MessageTemplateController::class)->except("show");

    Route::resource("contact-groups", ContactGroupController::class)->except("show");

    Route::resource("contacts", ContactController::class)->except("show");

    Route::post("contacts/import", [ContactController::class, "import"])->name("contacts.import");

    Route::get("devices/{device}/scan", [DeviceController::class, "scan"])->name("devices.scan");

    Route::get("sender/single/", [SenderController::class, "single"])->name("sender.single");

    Route::get("sender/bulk/", [SenderController::class, "bulkSend"])->name("sender.bulk");

    Route::post("sender", [SenderController::class, "send"])->name("sender.send");

    Route::get("messages", [MessageController::class, "index"])->name("messages.index");

    Route::get("profile", [PanelController::class, "profile"])->name("profile.index");

    Route::post("profile", [PanelController::class, "profileUpdate"])->name("profile.update");

    Route::get("auth_key", [PanelController::class, "authKey"])->name("auth_key.index");

    Route::post("auth_key", [PanelController::class, "authKeyUpdate"])->name("auth_key.update");

    Route::resource("groups", ScrapGroupController::class);




});

Route::post("messages/callback", [MessageController::class, "messagesCallback"])->name("messages.callback");

Route::post("ttt", function (Request $request) {
    Log::info($request->all());
    return true;
});

Route::post("device/status", function (Request $request) {
    $data = $request->only(['session', 'status', "phone"]);
    Log::info($data);
    broadcast(new SessionStatusEvent($data));
});



Route::get("login", [AuthController::class, "login"])->name("login")->middleware("guest");
Route::post("login", [AuthController::class, "loginStore"])->name("login.store")->middleware("guest");

Route::post("logout", [AuthController::class, "logout"])->name("logout")->middleware("auth");

Route::get("signup", [SignupController::class, "index"])->name("signup")->middleware("guest");
Route::post("signup", [SignupController::class, "store"])->name("signup.store")->middleware("guest");


Route::get("forgot-password", [ForgotPasswordController::class, "index"])->name("forgot-password")->middleware("guest");

Route::post("send-otp", [ForgotPasswordController::class, "sendOtp"])->name("send-otp")->middleware("guest");

Route::post("submit-otp", [ForgotPasswordController::class, "submitOtp"])->name("submit-otp")->middleware("guest");



Route::controller(HomeController::class)->name("front.")->group(function () {
    Route::get("/", "index")->name("index");
});


