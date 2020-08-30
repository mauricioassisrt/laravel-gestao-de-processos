@extends('layouts.admin')
@section('title', 'Funcionários')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Novo funcionário</h5>

                <p class="card-text">
                    {!! Form::open(['route' => 'admin.employees.store']) !!}

                    @include('admin.employees._form')

                </p>
                {!! Form::submit('Salvar', ['class' => 'card-link btn btn-primary']) !!}

                <a href="{{ route('admin.employees.index') }}" class="card-link">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
