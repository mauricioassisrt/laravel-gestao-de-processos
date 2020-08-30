<div class='btn-group' id="data-{{$id}}">
    <a href="{!! $showUrl !!}"
       class='btn btn-default btn-xs' title="Visualizar">
        <i class="fas fa-eye"></i>
    </a>
    <a href="{!! $editUrl !!}"
       class='btn btn-default btn-xs' title="Editar">
        <i class="fas fa-edit"></i>
    </a>
    {!! Form::button('<i class="fas fa-trash-alt"></i>', [
            'class' => 'btn btn-default btn-xs text-danger',
            'onclick' => "if(confirm('Deseja excluir definitivamente este item?')){event.preventDefault();document.getElementById('data-delete-{$id}').submit();}"
    ]) !!}

    <form action="{!! $deleteUrl !!}" method="POST" id="data-delete-{{$id}}">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
    </form>
</div>
