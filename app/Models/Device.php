<?php

namespace App\Models;

use App\Datatables\DatatableModelTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\EloquentDataTable;

class Device extends Model
{
    use DatatableModelTrait;

    protected $fillable = ['device_id', 'locale', 'platform', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    private function datatableRoutePrefix(): string
    {
        return "admin.devices";
    }

    private function datatableQuery(): Builder
    {
        return $this->query()->with('user');
    }

    private function datatableConstruct(): EloquentDataTable
    {
        $datatable = $this->datatableMake();

        $datatable->editColumn('created_at', function ($row) {
            return $row->created_at->format('d/m/Y - H:i:s');
        });

        $datatable->editColumn('updated_at', function ($row) {
            return $row->updated_at->format('d/m/Y - H:i:s');
        });

        return $datatable;
    }

    private function datatableColumns(): array
    {
        return [
            ['data' => 'id'],
            ['data' => 'user.name'],
            ['data' => 'device_id'],
            ['data' => 'locale'],
            ['data' => 'platform'],
            ['data' => 'created_at'],
            ['data' => 'updated_at'],
        ];
    }
}
