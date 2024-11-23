<?php

namespace App\Events;

use App\Models\User;
use App\Models\Device;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Log;

class SessionStatusEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $req;



    public function __construct($r)
    {
        $this->req = $r;
        Log::info("SessionStatusEvent", $this->req);
        $device = Device::where("id", $this->req["session"])->first();
        $device->status = $this->req["status"];
        $device->phone = $this->req["phone"];
        $device->save();



    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel($this->req["session"]),

        ];
    }
    public function broadcastWith()
    {
        return [
            "session" => $this->req["session"],
            "status" => $this->req["status"],
        ];
    }

    public function broadcastAs()
    {
        return 'sessionstatus';
    }
}
