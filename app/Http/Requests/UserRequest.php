<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required',
            'email' => "required|email|unique:users,email,{$this->user}",
            'document' => "required|cpf|unique:users,document,{$this->user}",
            'rg' => "required|unique:users,rg,{$this->user}",
            'phone' => 'required',
            'address' => 'required',
            'birthdate' => 'required|date',
        ];


        if (request()->is("api/*")) {
            $rules['password'] = "required|min:6";
        } else {
            $rules['password'] = "required|confirmed|min:6";
        }

        if ($this->user) {
            $rules['password'] = 'nullable';
        }

        return $rules;
    }
}
