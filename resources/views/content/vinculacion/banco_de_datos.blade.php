@extends('layouts.app')

@section('content')
	<h3>Banco de proyectos ITSCH</h3>
	<hr>
	<div class="table-responsive-sm">
        <table class="table table-hover" id="tabBanco">
            <thead class="table-sm">
                <tr>
                    <th>Carrera</th>
                    <th>Proyecto</th>
                    <th>No. Integrantes</th>
                    <th>Empresa/Institución</th>
                    <th>Dirección</th>
                    <th>Telefono de contacto</th>
                    <th>Correo de contacto</th>
                    <th>Docente responsable</th>
                    <th>Fecha inicio</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($banco as $ba)
                    <tr>
                        <td>{{ $ba->carrera }}</td>
                        <td>{{ $ba->proyecto }}</td>
                        <td>{{ $ba->vacantes }}</td>
                        <td>{{ $ba->empresa }}</td>
                        <td>{{ $ba->direccion }}</td>
                        <td>{{ $ba->telefono }}</td>
                        <td>{{ $ba->correo }}</td>
                        <td>{{ $ba->docente }}</td>
                        <td>{{ $ba->inicio }}</td>
                        <td>
                            @if ($ba->status==1)
                                <p class="bg-success text-white">Inicio</p>
                            @elseif ($ba->status==2)
                                <p class="bg-warning text-white">En proceso</p>
                            @elseif ($ba->status==3)
                                <p class="bg-danger text-white">Terminado</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('js')
    <script>
       //Codigo para adornar las tablas con datatables
	    $(document).ready(function() {
	        $('#tabBanco').DataTable({

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

