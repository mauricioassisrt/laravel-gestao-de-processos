<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('device_id', 'device_id*:') !!}
        {!! Form::text('device_id', null, ['required' => 'true', 'class' => $errors->has('device_id') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('device_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('device_id') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('platform', 'Plataforma*:') !!}
        {!! Form::select('platform', $platforms, null, ['required' => true, 'class' => $errors->has('platform') ? 'custom-select is-invalid' : 'custom-select']) !!}
        @if ($errors->has('platform'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('platform') }}</strong>
            </span>
        @endif
    </div>
</div>
