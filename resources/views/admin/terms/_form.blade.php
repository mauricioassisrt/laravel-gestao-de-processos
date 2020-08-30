@include('admin._partials.jodit-editor')

<div class="form-row">
        <div class="form-group col-sm-12">
            {!! Form::label('content', 'Conteúdo*:') !!}
            {!! Form::textarea('content', null, ['class' => $errors->has('content') ? 'form-control is-invalid' : 'form-control']) !!}
            @if ($errors->has('content'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('content') }}</strong>
            </span>
            @endif
        </div>
    </div>