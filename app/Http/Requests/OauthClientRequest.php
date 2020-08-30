<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OauthClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'client_id' => 'required|min:16',
            'client_secret' => 'required|min:16'
        ];
    }
}
