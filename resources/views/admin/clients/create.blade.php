@extends('layouts.admin')
@section('title', 'Clientes')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Novo cliente</h5>

                <p class="card-text">
                    {!! Form::open(['route' => 'admin.clients.store']) !!}

                    @include('admin.clients._form')

                </p>
                {!! Form::submit('Salvar', ['class' => 'card-link btn btn-primary']) !!}

                <a href="{{ route('admin.clients.index') }}" class="card-link">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
