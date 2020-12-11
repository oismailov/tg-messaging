<?php

namespace App\Events;

use App\Dto\Message;
use Illuminate\Queue\SerializesModels;

class MessageSent
{
    use SerializesModels;

    /**
     * @var Message
     */
    public $message;

    /**
     * MessageSent constructor.
     *
     * @param Message $message
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
}
