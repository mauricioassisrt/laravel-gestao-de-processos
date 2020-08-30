<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'          => $this->name,
            'email'         => $this->email,
            'document'      => $this->document,
            'rg'            => $this->rg,
            'phone'         => $this->phone,
            'address'       => $this->address,
            'filiate_code'  => $this->filiate_code,
            'birthdate'     => $this->birthdate,
            'credit'     => $this->credit,
        ];
    }
}
