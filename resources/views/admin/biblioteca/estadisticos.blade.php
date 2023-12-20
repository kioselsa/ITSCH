@extends('layouts.plant_admin')
@section('titulo','Estadisticos')
@section('contenido')
    @section('ruta','Estadisticos')
    <table class="table" id="tabEstadisticos">
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Carrera</th>
                <th>Numero de Control</th>
                <th>Nombre</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $ser)
                <tr>
                    <td>{{$ser->servicio}}</td>
                    <td>{{$ser->carrera}}</td>
                    <td>{{$ser->control}}</td>
                    <td>{{$ser->nombre}}</td>
                    <td>{{$ser->sexo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        //Codigo para adornar las tablas con datatables
        $(document).ready(function() {
            $('#tabEstadisticos').DataTable({

                dom: 'Bfrtip',

                responsive: {
                    breakpoints: [
                    {name: 'bigdesktop', width: Infinity},
                    {name: 'meddesktop', width: 1366},
                    {name: 'smalldesktop', width: 1280},
                    {name: 'medium', width: 1188},
                    {name: 'tabletl', width: 1024},
                    {name: 'btwtabllandp', width: 848},
                    {name: 'tabletp', width: 768},
                    {name: 'mobilel', width: 600},
                    {name: 'mobilep', width: 320}
                    ]
                },

                lengthMenu: [
                    [ 5, 10, 25, 50, -1 ],
                    [ '5 reg', '10 reg', '25 reg', '50 reg', 'Ver todo' ]
                ],

                buttons: [
                    {extend: 'collection', text: 'Exportar',
                        buttons: [
                            { extend: 'copyHtml5', text: 'Copiar' },
                            'csvHtml5',
                            'excelHtml5',
                            'pdfHtml5',
                            { extend: 'print', text: 'Imprimir' },
                        ]},
                    { extend: 'colvis', text: 'Columnas visibles' },
                    { extend:'pageLength',text:'Ver registros'},
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        });
    </script>
@endsection