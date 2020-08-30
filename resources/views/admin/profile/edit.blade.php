@extends('layouts.admin')
@section('title', 'Perfil')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Alterar Senha</h5>

                <p class="card-text">
                    {!! Form::model($data, ['route' => ['admin.profile.update'], 'method' => 'post']) !!}

                    @include('admin.profile._form')

                </p>

                {!! Form::submit('Salvar', ['class' => 'card-link btn btn-primary']) !!}


                <a href="{{route('admin.index')}}" class="card-link">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
