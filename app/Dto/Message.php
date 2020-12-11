<?php

namespace App\Dto;

use App\Http\Requests;

class Message
{
    /**
     * @var string
     */
    private $sender;
    /**
     * @var string
     */
    private $receiver;
    /**
     * @var string
     */
    private $body;

    public function __construct(Requests\NewMessageRequest $request)
    {
        $data = $request->validated();
        $this->sender = $data['sender'];
        $this->receiver = $data['receiver'];
        $this->body = $data['body'];
    }

    /**
     * @return string
     */
    public function getSender(): string
    {
        return $this->sender;
    }

    /**
     * @return string
     */
    public function getReceiver(): string
    {
        return $this->receiver;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'sender' => $this->getSender(),
            'receiver' => $this->getReceiver(),
            'body' => $this->getBody()
        ];
    }
}
