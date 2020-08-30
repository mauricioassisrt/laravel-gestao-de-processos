<div class="form-row">
    <div class="form-group col-sm-2">
        {!! Form::label('id', 'Código Usuário :') !!}
        {!! Form::text('id', null, ['required' => 'true', 'class' => $errors->has('id') ? 'form-control is-invalid' : 'form-control','readonly'=> "readonly"]) !!}
        @if ($errors->has('id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('id') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('name', 'Nome Usuário :') !!}
        {!! Form::text('name', null, ['required' => 'true', 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control','readonly'=> "readonly"]) !!}
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group col-sm-2">
        {!! Form::label('document', 'Documento Usuário :') !!}
        {!! Form::text('document', null, ['required' => 'true', 'class' => $errors->has('document') ? 'form-control is-invalid' : 'form-control', 'readonly'=> "readonly"]) !!}
        @if ($errors->has('document'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('document') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email Usuário :') !!}
        {!! Form::text('email', null, ['required' => 'true', 'class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control','readonly'=> "readonly"]) !!}
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('senha', 'Nova Senha :') !!}
        {!! Form::password('senha', ['required' => 'true', 'class' => $errors->has('senha') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('senha'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('senha') }}</strong>
            </span>
        @endif
    </div>
</div>

