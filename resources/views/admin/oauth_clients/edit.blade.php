@extends('layouts.admin')
@section('title', 'Api Clients')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Editar Api Client</h5>

                <p class="card-text">
                    {!! Form::model($data, ['route' => ['admin.oauth_clients.update', $data->id], 'method' => 'put']) !!}

                    @include('admin.oauth_clients._form')

                </p>

                {!! Form::submit('Salvar', ['class' => 'card-link btn btn-primary']) !!}


                <a href="{{ route('admin.oauth_clients.index') }}" class="card-link">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
