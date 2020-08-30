@extends('layouts.admin')
@section('title', 'Termos de Uso')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Termos de Uso</h5>

                <p class="card-text">
                    {!! Form::model($data, ['route' => ['admin.terms.update', 1], 'method' => 'put']) !!}
                    @include('admin.terms._form')
                </p>
                {!! Form::submit('Salvar', ['class' => 'card-link btn btn-primary']) !!}

                <a href="{{ route('admin.terms.index') }}" class="card-link">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

