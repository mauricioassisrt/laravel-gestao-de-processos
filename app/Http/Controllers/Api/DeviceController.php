<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\DeviceRequest;
use App\Http\Resources\DeviceResource;
use App\Models\Device;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    /**
     * @var Device
     */
    private $model;

    public function __construct(Device $model)
    {
        $this->model = $model;
    }

    public function store(DeviceRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        $model = $this->model->updateOrCreate($request->only('device_id'), $input);
        return new DeviceResource($model);
    }
}
