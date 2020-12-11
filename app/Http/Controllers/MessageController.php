<?php

namespace App\Http\Controllers;

use App\Dto;
use App\Events;
use App\Http\Requests;
use App\Http\Resources;

/**
 * Class MessageController
 *
 * @package App\Http\Controllers
 */
class MessageController extends Controller
{
    /**
     * Send message.
     *
     * @param Requests\NewMessageRequest $request
     *
     * @return Resources\MessageResource
     */
    public function send(Requests\NewMessageRequest $request): Resources\MessageResource
    {
        event(new Events\MessageSent(new Dto\Message($request)));

        return new Resources\MessageResource([]);
    }
}

