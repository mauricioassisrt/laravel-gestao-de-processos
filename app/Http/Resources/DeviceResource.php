<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeviceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'device_id' => $this->device_id,
            'locale' => $this->locale,
            'platform' => $this->platform,
            'user_id' => $this->user_id,
        ];
    }
}
