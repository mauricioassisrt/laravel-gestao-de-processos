@php($lang = request('lang') ? request('lang') : config('translatable.locale'))
<input type="hidden" name="lang" value="{{ $lang }}">
<div class="dropdown float-right">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownLangButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        {{ \App\Models\Language::getAll(false)[$lang] }}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownLangButton">
        @foreach(\App\Models\Language::getAll(false) as $key => $value)
            <a class="dropdown-item {{ $lang == $key ? 'active' : ''}}" href="?lang={{$key}}">{{ $value }}</a>
        @endforeach
    </div>
</div>
