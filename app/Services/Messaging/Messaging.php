<?php

namespace App\Services\Messaging;

use App\Dto;

/**
 * Interface Messaging
 *
 * @package App\Services
 */
interface Messaging
{
    /**
     * Send message.
     *
     * @param Dto\Message $messageDto
     */
    public function send(Dto\Message $messageDto): void;
}
