<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeviceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'device_id' => 'required',
            'locale' => 'nullable|in:pt,en',
            'platform' => 'required|in:android,ios',
        ];
    }
}
