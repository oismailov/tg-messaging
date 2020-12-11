<?php

namespace App\Services\Messaging;

use App\Dto;
use Pusher;

/**
 * Class PusherService
 *
 * @package App\Services
 */
class PusherService implements Messaging
{
    private $pusher;

    /**
     * PusherService constructor.
     *
     * @throws Pusher\PusherException
     */
    public function __construct()
    {
        $this->pusher = new Pusher\Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true
            ]
        );
    }

    /**
     * Send message.
     *
     * @param Dto\Message $messageDto
     *
     * @throws Pusher\PusherException
     */
    public function send(Dto\Message $messageDto): void
    {
        $this->pusher->trigger('my-channel', 'my-event', $messageDto->toArray());
    }
}
