<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * @var Device
     */
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }


    public function edit()
    {
        $id = auth()->user()->id;
        $data = $this->model->find($id);
        return view('admin.profile.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $id = auth()->user()->id;
        $model = $this->model->find($id);
        $model->password = Hash::make($input['senha']);
        $model->save();

        flash()->success('Registro atualizado com sucesso!');

        return redirect()->route('admin.profile.edit');
    }

}
