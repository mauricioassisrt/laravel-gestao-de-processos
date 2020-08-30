@extends('layouts.admin')
@section('title', 'Funcionários')

@section('content')
    <div class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">{{$data->name}}</h5>
                <p class="card-text"><b>Id:</b> {{ $data->id }}</p>
                <p class="card-text"><b>Nome:</b> {{ $data->name }}</p>
                <p class="card-text"><b>Email:</b> {{ $data->email }}</p>
                <p class="card-text"><b>CPF:</b> {{ $data->cpf }}</p>
                <p class="card-text"><b>Telefone:</b> {{ $data->phone }}</p>
                <p class="card-text"><b>Criado em:</b> {{ $data->created_at->format('d/m/Y - H:i:s') }}</p>
                <p class="card-text"><b>Atualizado:</b> {{ $data->updated_at->format('d/m/Y - H:i:s') }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.employees.index') }}" class="card-link">Voltar</a>
            </div>
        </div>
    </div>
@endsection
