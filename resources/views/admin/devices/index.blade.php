@extends('layouts.admin')
@section('title', 'Dispositivos')

@section('content')
    <div class="content">
        <a href="{{ route('admin.devices.create') }}" class="btn btn-primary mb-2 float-right" title="Cadastrar Novo">
            <i class="fas fa-plus"></i>
            Add
        </a>
        <div class="clearfix"></div>

        <div class="card card-primary card-outline">
            <div class="card-body">
                <table class="table table-responsive-md table-striped datatable" width="100%">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Device</th>
                        <th scope="col">Lingua</th>
                        <th scope="col">Platf</th>
                        <th scope="col">Criado em</th>
                        <th scope="col">Atualizado em</th>
                        <th scope="col">Ação</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@include('datatables.render', $datatableConfig)
