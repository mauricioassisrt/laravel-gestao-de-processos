<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('title', 'Título*:') !!}
        {!! Form::text('title', null, ['required' => 'true', 'class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('description', 'Descrição*:') !!}
        {!! Form::text('description', null, ['required' => 'true', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>
