<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * @var Employee
     */
    private $model;

    public function __construct(Employee $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $datatableConfig = $this->model->datatableConfig();
        return view('admin.employees.index', compact('datatableConfig'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(EmployeeRequest $request)
    {
        $this->model->create($request->all());

        flash()->success('Funcionário cadastrado com sucesso!');

        return redirect()->route('admin.employees.index');
    }

    public function show($id)
    {
        $model = $this->model->find($id);

        if (empty($model)) {
            flash()->error('Funcionário não encontrado');
            return redirect()->route('admin.employees.index');
        }

        return view('admin.employees.show')->with('data', $model);
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        if (empty($data)) {
            flash()->error('Funcionário não encontrado');

            return redirect()->route('admin.employees.index');
        }

        return view('admin.employees.edit', compact('data'));
    }

    public function update($id, EmployeeRequest $request)
    {
        $model = $this->model->find($id);

        if(empty($model)) {
            flash()->error('Funcionário não encontrado');

            return redirect()->route('admin.employees.index');
        }

        $model->update($request->all());

        flash()->success('Funcionário atualizado com sucesso!');

        return redirect()->route('admin.employees.index');
    }

    public function destroy($id)
    {
        $model = $this->model->find($id);

        if (empty($model)) {
            flash()->error('Funcionário não encontrado');
            return redirect()->route('admin.employees.index');
        }

        $model->delete();

        flash()->success('Funcionário excluído com sucesso!');

        return redirect()->route('admin.employees.index');
    }

    public function datatable()
    {
        return $this->model->datatableRender();
    }
}
