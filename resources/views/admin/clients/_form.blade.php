<div class="form-row">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Nome*:') !!}
        {!! Form::text('name', null, ['required' => 'true', 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email*:') !!}
        {!! Form::email('email', null, ['required' => 'true', 'class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div>
