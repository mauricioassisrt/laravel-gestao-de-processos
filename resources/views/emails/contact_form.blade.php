@extends('layouts.email')
@section('content')
    <h3>Contato via site</h3>

    <div style="text-align: justify;">
        <p><b>Nome:</b> {{ $data['name'] }}</p>
        <p><b>Email:</b> {{ $data['email'] }}</p>
        @isset($data['phone'])
            <p><b>Telefone:</b> {{ $data['phone'] }}</p>
        @endisset
        <hr/>
        <p><b>Mensagem:</b> {{ $data['message'] }}</p>
    </div>

@endsection
