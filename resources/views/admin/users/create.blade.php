@extends('layouts.admin')
@section('title', 'Usuários')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Novo usuário</h5>

                <p class="card-text">
                    {!! Form::open(['route' => 'admin.users.store']) !!}

                    @include('admin.users._form')

                </p>
                {!! Form::submit('Salvar', ['class' => 'card-link btn btn-primary']) !!}

                <a href="{{ route('admin.users.index') }}" class="card-link">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
