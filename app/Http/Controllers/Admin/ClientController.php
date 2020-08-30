<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;


class ClientController extends Controller
{
    /**
     * @var Client
     */
    private $model;

    public function __construct(Client $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $datatableConfig = $this->model->datatableConfig();
        return view('admin.clients.index', compact('datatableConfig'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(ClientRequest $request)
    {
        $this->model->create($request->all());

        flash()->success('Cliente cadastrado com sucesso!');

        return redirect()->route('admin.clients.index');
    }

    public function show($id)
    {
        $model = $this->model->find($id);

        if (empty($model)) {
            flash()->error('Cliente não encontrado');
            return redirect()->route('admin.clients.index');
        }

        return view('admin.clients.show')->with('data', $model);
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        if (empty($data)) {
            flash()->error('Cliente não encontrado');

            return redirect()->route('admin.clients.index');
        }

        return view('admin.clients.edit', compact('data'));
    }

    public function update($id, ClientRequest $request)
    {
        $model = $this->model->find($id);

        if(empty($model)) {
            flash()->error('Cliente não encontrado');

            return redirect()->route('admin.clients.index');
        }

        $model->update($request->all());

        flash()->success('Cliente atualizado com sucesso!');

        return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
        $model = $this->model->find($id);

        if (empty($model)) {
            flash()->error('Cliente não encontrado');
            return redirect()->route('admin.clients.index');
        }

        $model->delete();

        flash()->success('Cliente excluído com sucesso!');

        return redirect()->route('admin.clients.index');
    }

    public function datatable()
    {
        return $this->model->datatableRender();
    }
}
