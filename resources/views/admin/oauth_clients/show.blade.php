@extends('layouts.admin')
@section('title', 'Api Clients')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">{{$data->name}}</h5>

                <p class="card-text"><b>Nome:</b> {{ $data->name }}</p>
                <p class="card-text"><b>id:</b> {{ $data->id }}</p>
                <p class="card-text"><b>secret:</b> {{ $data->secret }}</p>
                <p class="card-text"><b>personal_access_client:</b> {{ $data->personal_access_client }}</p>
                <p class="card-text"><b>password_client:</b> {{ $data->password_client }}</p>
                <p class="card-text"><b>revoked:</b> {{ $data->revoked }}</p>
                <p class="card-text"><b>Criado em:</b> {{ $data->created_at }}</p>
                <p class="card-text"><b>Atualizado:</b> {{ $data->updated_at }}</p>

                <a href="{{ route('admin.oauth_clients.index') }}" class="card-link">Voltar</a>
            </div>
        </div>
    </div>
@endsection
