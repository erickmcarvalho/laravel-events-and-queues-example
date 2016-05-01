<?php

namespace App\Listeners;

use App\Events\ShowMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ShowMessage  $event
     * @return void
     */
    public function handle(ShowMessage $event)
    {
        //
    }
}
