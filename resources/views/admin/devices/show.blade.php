@extends('layouts.admin')
@section('title', 'Dispositivos')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">{{ $data->device_id }}</h5>

                <p class="card-text"><b>Device:</b> {{ $data->device_id }}</p>
                <p class="card-text"><b>Linguagem:</b> {{ $data->locale }}</p>
                <p class="card-text"><b>Plataforma:</b> {{ $data->platform }}</p>
                <p class="card-text"><b>Criado em:</b> {{ $data->created_at }}</p>
                <p class="card-text"><b>Atualizado:</b> {{ $data->updated_at }}</p>

                <a href="{{ route('admin.devices.index') }}" class="card-link">Voltar</a>
            </div>
        </div>
    </div>
@endsection
