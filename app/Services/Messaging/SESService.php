<?php

namespace App\Services\Messaging;

use App\Dto;
use App\Mail\MessageSent;
use Aws\Exception\AwsException;
use Illuminate\Support\Facades\Mail;

/**
 * Class SESService
 *
 * @package App\Services
 */
class SESService implements Messaging
{
    /**
     * Send message.
     *
     * @param Dto\Message $messageDto
     *
     * @throws AwsException
     */
    public function send(Dto\Message $messageDto): void
    {
        Mail::to($messageDto->getReceiver())->send(new MessageSent());
    }
}
