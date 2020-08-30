@extends('layouts.admin')
@section('title', 'Clientes')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Editar cliente</h5>

                <p class="card-text">
                    {!! Form::model($data, ['route' => ['admin.clients.update', $data->id], 'method' => 'put']) !!}

                    @include('admin.clients._form')

                </p>

                {!! Form::submit('Salvar', ['class' => 'card-link btn btn-primary']) !!}


                <a href="{{ route('admin.clients.index') }}" class="card-link">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
