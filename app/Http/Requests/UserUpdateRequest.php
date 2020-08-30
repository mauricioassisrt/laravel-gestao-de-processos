<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $userId = $this->user()->id;
        $rules = [
            'name' => 'required',
            'email' => "required|email|unique:users,email,{$userId}",
            'document' => "required|cpf|unique:users,document,{$userId}",
            'rg' => "required|unique:users,rg,{$userId}",
            'phone' => 'required',
            'address' => 'required',
            'birthdate' => 'required|date',
        ];

        return $rules;
    }
}
