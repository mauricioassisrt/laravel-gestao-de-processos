<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('role_id', 'Tipo:') !!}
        {!! Form::select('role_id', $roles,  null, ['required' => 'true', 'class'=> $errors->has('role_id') ? 'custom-select is-invalid' : 'custom-select']) !!}
        @if ($errors->has('role_id'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('role_id') }}</strong>
        </span>
        @endif
    </div>
</div>

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

<div class="form-row">

    <div class="form-group col-sm-3">
        {!! Form::label('document', 'CPF*:') !!}
        {!! Form::text('document', null, ['required' => 'true', 'class' => $errors->has('document') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('document'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('document') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-sm-3">
        {!! Form::label('rg', 'RG*:') !!}
        {!! Form::text('rg', null, ['required' => 'true', 'class' => $errors->has('rg') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('rg'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('rg') }}</strong>
        </span>
        @endif
    </div>


    <div class="form-group col-sm-3">
        {!! Form::label('birthdate', 'Data de nascimento*:') !!}
        {!! Form::text('birthdate', null, ['required' => true, 'class' => $errors->has('birthdate') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('birthdate'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('birthdate') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-sm-3">
        {!! Form::label('phone', 'Telefone*:') !!}
        {!! Form::text('phone', null, ['required' => 'true', 'class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('phone'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-sm-12">
        {!! Form::label('address', 'Endereço*:') !!}
        {!! Form::text('address', null, ['required' => 'true', 'class' => $errors->has('address') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('address'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-sm-6">
        {!! Form::label('password', 'Senha:') !!}
        {!! Form::input('password', 'password', null, ['required' => 'true', 'class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('password_confirmation', 'Confirmar senha:') !!}
        {!! Form::input('password', 'password_confirmation', null, ['required' => 'true', 'class' => $errors->has('password_confirmation') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('password_confirmation'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
        @endif
    </div>
</div>

@push('post-scripts')
<script>
    $(document).ready(function () {
        $('#birthdate').datepicker({
            format: 'dd-mm-yyyy',
            language: 'pt-BR',
            footer: true,
            modal: true,
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome'
        });
    });
</script>
@endpush
