@extends('layouts.admin')
@section('title', 'Notificações')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Nova notificação</h5>

                <p class="card-text">
                    {!! Form::open(['route' => 'admin.notifications.store']) !!}

                    @include('admin.notifications._form')

                </p>
                {!! Form::submit('Enviar', ['class' => 'card-link btn btn-primary']) !!}

                <a href="{{ route('admin.notifications.index') }}" class="card-link">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
