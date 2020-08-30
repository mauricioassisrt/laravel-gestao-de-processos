<?php

namespace App\Models;

use App\Datatables\DatatableModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\EloquentDataTable;

class Notification extends Model
{
    const STATUS_CREATED = 1;
    const STATUS_SENT_APP_CENTER = 2;
    const STATUS_ERROR_TO_SENT_APP_CENTER = 3;

    use DatatableModelTrait;

    protected $fillable = ['title', 'description', 'locale'];

    public function getStatusAttribute()
    {
        switch($this->status_id){
            case self::STATUS_CREATED:
                return 'Criado Localmente';
            case self::STATUS_SENT_APP_CENTER:
                return 'Enviado para AppCenter';
            case self::STATUS_ERROR_TO_SENT_APP_CENTER:
                return 'Erro ao enviar para AppCenter';
        }
    }

    private function datatableRoutePrefix(): string
    {
        return "admin.notifications";
    }

    private function datatableColumns(): array
    {
        return [
            ['data' => 'id'],
            ['data' => 'title'],
            //['data' => 'locale'],
            ['data' => 'created_at'],
            ['data' => 'status_id'],
        ];
    }

    private function datatableConstruct(): EloquentDataTable
    {
        $datatable = $this->datatableMake();

        $datatable->editColumn('created_at', function ($row) {
            return $row->created_at->format('d/m/Y - H:i:s');
        });

        $datatable->editColumn('status_id', function ($row) {
            return $row->status;
        });

        return $datatable;
    }

    public function datatableRender(): JsonResponse
    {
        return $this->datatableConstruct()
            ->addColumn('actions', function ($row) {
                return view('admin.notifications.actions', compact('row'));
            })
            ->make(true);
    }
}
