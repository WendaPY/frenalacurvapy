<?php

namespace Ushahidi\App\Listeners;

use Ushahidi\App\Events\SendToHDXEvent;
use Log;

class SendToHDXEventListener
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
    protected function getUsecase()
    {
    }
    /**
     * Handle the event.
     *
     * @param  SendToHDXEvent  $event
     * @return void
     */
    public function handle(SendToHDXEvent $event)
    {
        Log::debug('Received a SendToHDXEvent', [$event]);

        // Initiate the process to send data to HDX
        //confirm that we want to send HDX info
        $usecaseFactory = service('factory.usecase')
            ->get('hxl_send', 'send')
            ->setIdentifiers(['job_id' => $event->jobId])
            ->interact();
    }
}
