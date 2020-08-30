<?php

namespace App\Models;

use App\Datatables\DatatableModelTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\EloquentDataTable;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'phone',
    ];

    use DatatableModelTrait;

    private function datatableRoutePrefix(): string
    {
        return "admin.employees";
    }

    private function datatableConstruct(): EloquentDataTable
    {
        $datatable = $this->datatableMake();

        $datatable->editColumn('created_at', function ($row) {
            return $row->created_at ? $row->created_at->format('d/m/Y - H:i:s') : null;
        });

        $datatable->editColumn('updated_at', function ($row) {
            return $row->updated_at->format('d/m/Y - H:i:s');
        });

        return $datatable;
    }

    private function datatableQuery(): Builder
    {
        return $this->query();
    }

    private function datatableColumns(): array
    {
        return [
            ['data' => 'id'],
            ['data' => 'name'],
            ['data' => 'email'],
            ['data' => 'cpf'],
            ['data' => 'phone'],
            ['data' => 'created_at'],
            ['data' => 'updated_at'],
        ];
    }
}
