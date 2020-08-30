@php($lang = isset($data) ? $data->locale : request('lang'))
<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('lang', 'Lingua*:') !!}
        {!! Form::select('lang', \App\Models\Language::getAll(true), $lang, ['onchange' => "location = '?lang='+this.value", 'required' => true, 'class' => $errors->has('lang') ? 'custom-select is-invalid' : 'custom-select']) !!}
        @if ($errors->has('lang'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('lang') }}</strong>
            </span>
        @endif
    </div>
</div>
