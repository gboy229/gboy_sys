<?php

namespace App\Modules\Admin\Events;

use Illuminate\Queue\SerializesModels;

class Admin
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

        echo 2323;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
