<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;


class UserController extends Controller
{
    /**
     * @var User
     */
    private $model;
    /**
     * @var Role
     */
    private $roleModel;

    public function __construct(User $model, Role $roleModel)
    {
        $this->model = $model;
        $this->roleModel = $roleModel;
    }

    public function index()
    {
        $datatableConfig = $this->model->datatableConfig();
        return view('admin.users.index', compact('datatableConfig'));
    }

    public function create()
    {
        $roles = $this->getRoles();

        return view('admin.users.create', compact('roles'));
    }

    public function store(UserRequest $request)
    {
        $input = $request->all();
        
        $input['filiate_code']  = substr(md5(rand(100, 200).microtime(true)), 0,6);
        $input['birthdate']     = date('Y-m-d', strtotime($input['birthdate']));
                 
        $this->model->create($input);

        flash()->success('Usuário cadastrado com sucesso!');

        return redirect()->route('admin.users.index');
    }

    public function show($id)
    {
        $user = $this->model->find($id);

        if (empty($user)) {
            flash()->error('Usuário não encontrado');
            return redirect()->route('admin.users.index');
        }

        return view('admin.users.show')->with('data', $user);
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        
        $data['birthdate'] = date('d-m-Y', strtotime($data['birthdate']));

        if (empty($data)) {
            flash()->error('Usuário não encontrado');

            return redirect()->route('admin.users.index');
        }

        $roles = $this->getRoles();

        return view('admin.users.edit', compact('data','roles'));
    }

    public function update($id, UserRequest $request)
    {
        $input = $request->all();

        if(!$request->get('password')){
            $input = $request->except('password');
        }
        
        $input['birthdate'] = date('Y-m-d', strtotime($request->get('birthdate')));
        
        $model = $this->model->find($id);

        if(empty($model)) {
            flash()->error('Usuário não encontrado');

            return redirect()->route('admin.users.index');
        }

        $model->update($input);

        flash()->success('Usuário atualizado com sucesso!');

        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $user = $this->model->find($id);

        if (empty($user)) {
            flash()->error('Usuário não encontrado');
            return redirect()->route('admin.users.index');
        }

        $user->delete();

        flash()->success('Usuário excluído com sucesso!');

        return redirect()->route('admin.users.index');
    }

    public function datatable()
    {
        return $this->model->datatableRender();
    }

    private function getRoles()
    {
        return $this->roleModel->pluck('name', 'id');
    }
}
