@extends('layouts.email')
@section('content')
    <p>
        Parabéns <b>{{ $model->name }}</b>, <br/>
        Seu cadastro foi realizado com sucesso!
    </p>
@endsection
