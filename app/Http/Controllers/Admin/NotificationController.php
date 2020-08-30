<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationRequest;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * @var Notification
     */
    private $model;

    public function __construct(Notification $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $datatableConfig = $this->model->datatableConfig();

        return view('admin.notifications.index', compact('datatableConfig'));
    }

    public function create()
    {
        return view('admin.notifications.create');
    }

    public function store(NotificationRequest $request)
    {
        $input = $request->all();
        $input['locale'] = 'pt';
        $this->model->create($input);

        return redirect()->route('admin.notifications.index');
    }

    public function show($id)
    {
        $user = $this->model->find($id);

        if (empty($user)) {
            flash()->error('Notificação não encontrada');
            return redirect()->route('admin.notifications.index');
        }

        return view('admin.notifications.show')->with('data', $user);
    }

    public function datatable()
    {
        return $this->model->datatableRender();
    }
}
