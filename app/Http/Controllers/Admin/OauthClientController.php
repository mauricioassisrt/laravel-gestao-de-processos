<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OauthClientRequest;
use App\Models\OauthClient;
use App\Models\User;
use Illuminate\Http\Request;

class OauthClientController extends Controller
{
    /**
     * @var User
     */
    private $model;

    public function __construct(OauthClient $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        $search = $request->get('search');

        if($search){
            $data = $this->model->where('name','like',"%{$search}%")->orderby('id', 'desc')->paginate();
        }else{
            $data = $this->model->orderBy('id', 'desc')->paginate();
        }
        return view('admin.oauth_clients.index', compact('data', 'search'));
    }

    public function create()
    {
        return view('admin.oauth_clients.create');
    }

    public function store(OauthClientRequest $request)
    {
        $input = $request->all();
        $input['personal_access_client'] = $request->get('personal_access_client') ? true : false;
        $input['password_client'] = $request->get('password_client') ? true : false;
        $input['revoked'] = $request->get('revoked') ? true : false;

        $this->model->create($input);

        flash()->success('OAuth Client cadastrado com sucesso!');

        return redirect()->route('admin.oauth_clients.index');
    }

    public function show($id)
    {
        $user = $this->model->find($id);

        if (empty($user)) {
            flash()->error('OAuth Client não encontrado');
            return redirect()->route('admin.oauth_clients.index');
        }

        return view('admin.oauth_clients.show')->with('data', $user);
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        if (empty($data)) {
            flash()->error('OAuth Client não encontrado');

            return redirect()->route('admin.oauth_clients.index');
        }

        return view('admin.oauth_clients.edit', compact('data'));
    }

    public function update($id, OauthClientRequest $request)
    {
        $input = $request->all();

        $input['personal_access_client'] = $request->get('personal_access_client') ? true : false;
        $input['password_client'] = $request->get('password_client') ? true : false;
        $input['revoked'] = $request->get('revoked') ? true : false;

        $model = $this->model->find($id);

        if(empty($model)) {
            flash()->error('OAuth Client não encontrado');

            return redirect()->route('admin.oauth_clients.index');
        }

        $model->update($input);

        flash()->success('OAuth Client atualizado com sucesso!');

        return redirect()->route('admin.oauth_clients.index');
    }

    public function destroy($id)
    {
        $user = $this->model->find($id);

        if (empty($user)) {
            flash()->error('OAuth Client não encontrado');
            return redirect()->route('admin.oauth_clients.index');
        }

        $user->delete();

        flash()->success('OAuth Client excluído com sucesso!');

        return redirect()->route('admin.oauth_clients.index');
    }
}
