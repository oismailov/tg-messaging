<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class MessageResource
 *
 * @package App\Http\Resources\Account
 */
class MessageResource extends JsonResource
{
    /**
     * @inheritDoc
     */
    public function toArray($request): array
    {
        return [
            'message' => __('message.success')
        ];
    }
}
