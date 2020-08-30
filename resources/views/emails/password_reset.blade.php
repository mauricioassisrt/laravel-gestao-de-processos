@extends('layouts.email')
@section('content')
    <p>
        <b>Olá, </b><br/>
        Clique no botão abaixo para recuperar a sua senha:
    </p>

    <a href="{{ route('password.reset', $token) }}" target="_blank"
       style="color: #ffffff; background-color: #F36B22;background: #F36B22;text-decoration: none;padding: 5px">
        Recuperar Senha</a>

    <p style="font-size: 10px">
        Caso não consiga clicar no botão, copie o link abaixo e cole no seu navegador:
        <br/>
        {{ route('password.reset', $token) }}
    </p>
@endsection
