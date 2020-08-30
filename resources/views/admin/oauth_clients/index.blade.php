@extends('layouts.admin')
@section('title', 'Api Clients')

@section('content')
    <div class="content">

        @include('admin._partials.search-input')

        <a href="{{ route('admin.oauth_clients.create') }}" class="btn btn-primary mb-2 float-right" title="Cadastrar Novo">
            <i class="fas fa-plus"></i>
            Add
        </a>
        <div class="clearfix"></div>

        <div class="card card-primary card-outline">
            <div class="card-body">
                <table class="table table-responsive-md">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">client_id</th>
                        <th scope="col">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->client_id }}</td>
                            <td>
                                <div class='btn-group' id="oauth_clients-{{$item->id}}">
                                    <a href="{{ route('admin.oauth_clients.show', $item->id) }}"
                                       class='btn btn-default btn-xs' title="Visualizar">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.oauth_clients.edit', $item->id) }}"
                                       class='btn btn-default btn-xs' title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    {!! Form::button('<i class="fas fa-trash-alt"></i>', [
                                            'class' => 'btn btn-default btn-xs text-danger',
                                            'onclick' => "if(confirm('Deseja excluir definitivamente este item?')){event.preventDefault();document.getElementById('oauth_clients-delete-{$item->id}').submit();}"
                                    ]) !!}

                                    {!! Form::open(['route' => ['admin.oauth_clients.destroy', $item->id], 'method' => 'delete', 'id' => "oauth_clients-delete-{$item->id}"]) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="float-right">
            {{ $data->links() }}
        </div>
    </div>
@endsection
