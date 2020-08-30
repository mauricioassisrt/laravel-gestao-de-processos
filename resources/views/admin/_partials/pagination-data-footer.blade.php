<div class="float-left">
    {{ $data->links() }}
</div>
<p class="float-right text-muted mr-1">

    @if($data->perPage() < $data->total())
        Exibindo {{ $data->perPage() }} de {{ $data->total() }}
    @else
        Exibindo {{ $data->total() }} de {{ $data->total() }}
    @endif
</p>
<div class="clearfix"></div>
