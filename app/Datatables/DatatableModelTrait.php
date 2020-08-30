<?php

namespace App\Datatables;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Facades\DataTables;

trait DatatableModelTrait
{
    public function datatableConfig(): array
    {
        return [
            'ajax' => $this->datatableRouteAjax(),
            'columns' => $this->datatableColumnsJson(),
            'hasActions' => $this->datatableHasActions(),
        ];
    }

    public function datatableRender(): JsonResponse
    {
        return $this->datatableConstruct()
            ->addColumn('actions', function ($row) {
                $id = $row->id;
                $showUrl = route("{$this->datatableRoutePrefix()}.show", $id);
                $editUrl = route("{$this->datatableRoutePrefix()}.edit", $id);
                $deleteUrl = route("{$this->datatableRoutePrefix()}.destroy", $id);
                return view('datatables.actions', compact('showUrl', 'editUrl', 'deleteUrl', 'id'));
            })
            ->make(true);
    }

    private function datatableRouteAjax(): string
    {
        return route("{$this->datatableRoutePrefix()}.datatable");
    }

    private function datatableColumnsJson()
    {
        return json_encode($this->datatableColumns());
    }

    private function datatableHasActions(): bool
    {
        return true;
    }

    private function datatableQuery(): Builder
    {
        return $this->query();
    }

    private function datatableColumns(): array
    {
        return [
            ['data' => 'id'],
        ];
    }

    private function datatableRoutePrefix(): string
    {
        return "admin.users";
    }

    private function datatableConstruct(): EloquentDataTable
    {
        return $this->datatableMake();
    }

    private function datatableMake(): EloquentDataTable
    {
        return DataTables::eloquent($this->datatableQuery());
    }
}
