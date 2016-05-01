<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ShowMessage extends Event implements ShouldBroadcast
{
    use SerializesModels;

    private $data;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message, $type = 'info')
    {
        $this->data = [
            'type' => !$type ? 'info' : $type,
            'message' => $message
        ];
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['test_channel'];
    }

    public function broadcastWith()
    {
        return $this->data;
    }
}
