<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Term;

class TermsController extends Controller
{

    /**
     * @var Term
     */
    private $model;

    public function __construct(Term $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data = $this->model->first();
        return view('admin.terms.index', compact('data'));
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        if (empty($data)) {
            flash()->error('Não encontrado');

            return redirect()->route('admin.terms.index');
        }

        return view('admin.terms.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $model = $this->model->find($id);

        if(empty($model)) {

            $this->model->create($request->all());
            flash()->success('Cadastrado com sucesso!');

            return redirect()->route('admin.terms.index');
        }

        $model->update($input);

        flash()->success('Atualizado com sucesso!');

        return redirect()->route('admin.terms.index');
    }
}
