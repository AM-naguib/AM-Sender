<?php

use Illuminate\Http\Request;
use App\Events\SessionStatusEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\DeviceController;
use App\Http\Controllers\Panel\SenderController;
use App\Http\Controllers\Api\ApiHandelController;


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

    Route::get("logs", [PanelController::class, "logs"])->name("logs");

    Route::resource("devices", DeviceController::class)->except("show");

    Route::get("devices/{device}/scan", [DeviceController::class, "scan"])->name("devices.scan");

    Route::get("sender/single/", [SenderController::class, "single"])->name("sender.single");

    Route::get("sender/bulk/", [SenderController::class, "bulkSend"])->name("sender.bulk");

    Route::post("sender", [SenderController::class, "send"])->name("sender.send");


    
    
    
});

Route::post("log/callback", [SenderController::class, "logCallback"])->name("log.callback");

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



