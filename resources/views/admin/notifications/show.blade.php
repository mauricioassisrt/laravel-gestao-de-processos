@extends('layouts.admin')
@section('title', 'Notificações')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">{{$data->title}}</h5>

                <p class="card-text"><b>Titulo:</b> {{ $data->title }}</p>
                <p class="card-text"><b>Descrição:</b> {{ $data->description }}</p>
                <p class="card-text"><b>Lingua:</b> {{ $data->locale }}</p>
                <p class="card-text"><b>Status:</b> {{ $data->status }}</p>
                <p class="card-text"><b>notification_id:</b> {{ $data->notification_id }}</p>

                <p class="card-text"><b>Criado em:</b> {{ $data->created_at }}</p>

                <a href="{{ route('admin.notifications.index') }}" class="card-link">Voltar</a>
            </div>
        </div>
    </div>
@endsection
