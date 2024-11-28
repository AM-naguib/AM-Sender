<?php

namespace App\Events;

use Log;
use App\Models\Device;
use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageStatusUpdate implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */


    public $req;
    public $user_id;

    public function __construct($r)
    {
        $this->req = is_array($r) ? (object) $r : $r;

        $data = (array) $this->req;


        $device = Device::where("id", $data["sessionId"])->first();

        $this->user_id = $device->user_id;

        $from = explode(":", $data["from"])[0];

        if (!$device) {

        }
        $message = Message::create([
            "device_id" => $device->id,
            "user_id" => $device->user_id,
            "to" => $this->req->to,
            "message" => $this->req->message,
            "from" => $from,
            "status" => $this->req->status,
        ]);
        if (!$message) {
        }

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel("user_" . $this->user_id),

        ];
    }


    public function broadcastAs()
    {
        return 'message_status';
    }
}
