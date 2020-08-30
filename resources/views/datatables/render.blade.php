@push('post-scripts')
    <script>
        function htmlDecode(data) {
            var txt = document.createElement('textarea');
            txt.innerHTML = data;
            return txt.value
        }

        $(document).ready(function () {
            var hasActions = '{{ $datatableConfig['hasActions'] }}';
            var columns = {!! $datatableConfig['columns']  !!}

            console.log(hasActions);

            if(hasActions) {
                columns.push({
                    "data": "actions",
                    "orderable": false,
                    render: function (data) {
                        return htmlDecode(data);
                    }
                });
            }

            $('.datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{{ $datatableConfig['ajax'] }}',
                "columns": columns,
                "order": [[0, 'desc']],
                "lengthMenu": [[10, 25, 50, 100, 500, -1], [10, 25, 50, 100, 500, "Todos"]],
                "language": {
                    "lengthMenu": "Por página: _MENU_",
                    "zeroRecords": "Nenhum registro encontrado",
                    "info": "Mostrando  de _START_ até _END_ de _TOTAL_ registros",
                    "infoEmpty": "Nenhum registro encontrado",
                    "infoFiltered": "(filtrado do total de _MAX_ registros)",
                    "search": "Buscar: ",
                    "paginate": {
                        "next": "Próxima",
                        "previous": "Anterior",
                    }
                },
                dom: 'Bflrtip',
                buttons: [
                    {
                        "extend": 'copy',
                        "text": '<i class="fa fa-copy"></i> Copiar',
                        "className": 'btn btn-sm btn-primary'
                    },
                    {"extend": 'csv', "text": '<i class="fa fa-file"></i> CSV', "className": 'btn btn-sm btn-primary'},
                    {
                        "extend": 'excel',
                        "text": '<i class="fa fa-file-excel"></i> Excel',
                        "className": 'btn btn-sm btn-primary'
                    },
                    {
                        "extend": 'pdf',
                        "text": '<i class="fa fa-file-pdf"></i> PDF',
                        "className": 'btn btn-sm btn-primary'
                    },
                    {
                        "extend": 'print',
                        "text": '<i class="fa fa-print"></i> Imprimir',
                        "className": 'btn btn-sm btn-primary'
                    }
                ],
            });
        });
    </script>
@endpush
