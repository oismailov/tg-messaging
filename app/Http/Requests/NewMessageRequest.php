<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class NewMessageRequest
 *
 * @package App\Http\Requests
 */
class NewMessageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'sender' => 'required|string|max:100|min:1',
            'receiver' => 'required|email|max:100|min:1',
            'body' => 'required|string|max:255|min:1'
        ];
    }
}
