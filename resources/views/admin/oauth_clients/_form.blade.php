<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('name', 'Nome*:') !!}
        {!! Form::text('name', null, ['required' => 'true', 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('client_id', 'client_id*:') !!}
        {!! Form::text('client_id', isset($data) ? null : bcrypt(str_random()), ['required' => 'true', 'class' => $errors->has('client_id') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('client_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('client_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('client_secret', 'client_secret*:') !!}
        {!! Form::text('client_secret', isset($data) ? null : bcrypt(str_random()), ['required' => 'true', 'class' => $errors->has('client_secret') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('client_secret'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('client_secret') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('personal_access_client', 'personal_access_client:') !!}
        {!! Form::checkbox('personal_access_client', true, null) !!}
        @if ($errors->has('personal_access_client'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('personal_access_client') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('password_client', 'password_client:') !!}
        {!! Form::checkbox('password_client', true, null) !!}
        @if ($errors->has('password_client'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password_client') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('revoked', 'revoked:') !!}
        {!! Form::checkbox('revoked', true, null) !!}
        @if ($errors->has('revoked'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('revoked') }}</strong>
            </span>
        @endif
    </div>
</div>
