<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeviceRequest;
use App\Models\Device;
use App\Models\Platform;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    /**
     * @var Device
     */
    private $model;
    /**
     * @var Platform
     */
    private $platformModel;

    public function __construct(Device $model, Platform $platformModel)
    {
        $this->model = $model;
        $this->platformModel = $platformModel;
    }

    public function index()
    {
        $datatableConfig = $this->model->datatableConfig();
        return view('admin.devices.index', compact('datatableConfig'));
    }

    public function create()
    {
        $platforms = $this->getPlatforms();

        return view('admin.devices.create', compact('platforms'));
    }

    public function store(DeviceRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $this->model->create($input);

        flash()->success('Dispositivo cadastrado com sucesso!');

        return redirect()->route('admin.devices.index');
    }

    public function show($id)
    {
        $model = $this->model->find($id);

        if (empty($model)) {
            flash()->error('Dispositivo não encontrado');
            return redirect()->route('admin.devices.index');
        }

        return view('admin.devices.show')->with('data', $model);
    }

    public function edit($id)
    {
        $platforms = $this->getPlatforms();
        $data = $this->model->find($id);

        if (empty($data)) {
            flash()->error('Dispositivo não encontrado');

            return redirect()->route('admin.devices.index');
        }

        return view('admin.devices.edit', compact('data', 'platforms'));
    }

    public function update($id, DeviceRequest $request)
    {
        $input = $request->all();

        $model = $this->model->find($id);

        if(empty($model)) {
            flash()->error('Dispositivo não encontrado');

            return redirect()->route('admin.devices.index');
        }

        $model->update($input);

        flash()->success('Dispositivo atualizado com sucesso!');

        return redirect()->route('admin.devices.index');
    }

    public function destroy($id)
    {
        $model = $this->model->find($id);

        if (empty($model)) {
            flash()->error('Dispositivo não encontrado');
            return redirect()->route('admin.devices.index');
        }

        $model->delete();

        flash()->success('Dispositivo excluído com sucesso!');

        return redirect()->route('admin.devices.index');
    }

    private function getPlatforms()
    {
        return $this->platformModel->all();
    }

    public function datatable()
    {
        return $this->model->datatableRender();
    }
}
