@extends('layouts.plant_admin')

@section('contenido')
    <h4><a href="{{ route('carreras.index') }}"> Carreras/</a>Editar plan de estudios/{{ $programa[0]->nom_pro }}</h4>
    <hr>

    <h5 id="nom_especialidad">Materias de la especialidad de {{ $esp_act->nombre }}</h5>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <form action="{{ route('carreras.showMateriasEspecialidad',$programa[0]->id_pro) }}">
                <div class="input-group mb-3 input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Especialidad</span>
                    </div>
                    <select class="form-control form-control-sm" id="id_especialidad" name="id_esp" required>
                        @foreach($especialidad as $esp)
                            <option value="{{ $esp->id }}">{{ $esp->nombre }}</option>
                        @endforeach                              
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success">Mostrar</button>
                    </div>
                </div>  
            </form>
        </div>
    </div>
    <hr class="red">

    <form action="{{ route('carreras.storeMatEsp',$programa[0]->id_pro) }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row"> 
            <div class="col-sm-3">
                <div class="input-group mb-3 input-group-sm">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Clave</span>
                    </div>
                    <input type="text" class="form-control" required name="clave" id="clave_esp" placeholder="Clave de la materia">
                </div>            
            </div>
            <div class="col-sm-3">
                <div class="input-group mb-3 input-group-sm">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                    </div>
                    <input type="text" class="form-control" required name="nombre" id="nombre_esp" placeholder="Nombre de la materia">
                </div>           
            </div>
            <div class="col-sm-5">
                <div class="input-group mb-3 input-group-sm">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Archivo PDF</span>
                    </div>
                    <input type="file" name="nom_archivo" id="arch_materia_esp" required>
                </div>          
            </div>
            <input type="hidden" name="id_esp" id="id_esp" readonly>
            <div class="col-sm-1">
                <button type="submmit" title="Agregar materia" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalAltasAtr" onclick="obtEspecialidad()">
                    <i class="fa fa-plus-circle" style="font-size:14px"></i> Materia
                </button>
            </div>              
        </div>
    </form>
   
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Temario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias_esp as $me )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $me->clave }}</td> 
                        <td>{{ $me->nombre }}</td>                      
                        <td>                           
                            <a href="{{ asset('storage/carreras_planes_estudio/'.$me->nom_pro.'/'.$me->nom_archivo) }}" target="_blank" download type="button" class="btn btn-success btn-sm" title="Descargar temario"><i class='fas fa-book-open' style='font-size:14px'></i></a>                              
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm" title="Modificar" data-toggle="modal" data-target="#myModalEditar" onclick="obtDatEditar({{ $me }})"><i class='fas fa-edit' style='font-size:14px'></i></button>
                            <button class="btn btn-danger btn-sm" title="Eliminar"><i class='fas fa-trash-alt' style='font-size:14px' data-toggle="modal" data-target="#myModalBajas" onclick="obtDatEliminar({{ $me }})"></i></button>
                        </td>
                    </tr> 
                @endforeach                                                          
            </tbody>
        </table>
    </div>
    <hr class="red">
    <br>

    <h5>Materias de tronco común</h5>
    <form action="{{ route('carreras.storePlanEstudios',$programa[0]->id_pro) }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row"> 
            <div class="col-sm-3">
                <div class="input-group mb-3 input-group-sm">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Clave</span>
                    </div>
                    <input type="text" class="form-control" required name="clave" id="clave" placeholder="Clave de la materia">
                </div>            
            </div>
            <div class="col-sm-3">
                <div class="input-group mb-3 input-group-sm">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                    </div>
                    <input type="text" class="form-control" required name="nombre" id="nombre" placeholder="Nombre de la materia">
                </div>           
            </div>
            <div class="col-sm-5">
                <div class="input-group mb-3 input-group-sm">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Archivo PDF</span>
                    </div>
                    <input type="file" name="nom_archivo" id="arch_materia" required>
                </div>          
            </div>
            <div class="col-sm-1">
                <button type="submmit" title="Agregar materia" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalAltasAtr">
                    <i class="fa fa-plus-circle" style="font-size:14px"></i> Materia
                </button>
            </div>              
        </div>
    </form>
    <br>
    
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Temario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programa as $pro)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pro->clave }}</td>
                        <td>{{ $pro->nombre }}</td>
                        <td>                           
                            <a href="{{ asset('storage/carreras_planes_estudio/'.$pro->nom_pro.'/'.$pro->nom_archivo) }}" target="_blank" download type="button" class="btn btn-success btn-sm" title="Descargar temario"><i class='fas fa-book-open' style='font-size:14px'></i></a>                              
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm" title="Modificar" data-toggle="modal" data-target="#myModalEditar" onclick="obtDatEditar({{ $pro }})"><i class='fas fa-edit' style='font-size:14px'></i></button>
                            <button class="btn btn-danger btn-sm" title="Eliminar"><i class='fas fa-trash-alt' style='font-size:14px' data-toggle="modal" data-target="#myModalBajas" onclick="obtDatEliminar({{ $pro }})"></i></button>
                        </td>
                    </tr>   
                @endforeach                                        
            </tbody>
        </table>
    </div>

    {{-- Sección de Modals --}}
    <!-- Modal Editar -->
    <div class="modal fade" id="myModalEditar">
        <div class="modal-dialog">
        <div class="modal-content">
            <form id="formEditar" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Editar Temarios</h4>                        
                </div>
                <!-- Modal body -->
                <div class="modal-body">                    
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Clave</span>
                        </div>
                        <input type="text" class="form-control" required name="clave" id="cla_update" placeholder="Clave de la materia">
                    </div>           
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Nombre</span>
                        </div>
                        <input type="text" class="form-control" required name="nombre" id="nom_update" placeholder="Nombre de la materia">
                    </div>          
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Archivo PDF</span>
                        </div>
                        <input type="file" name="nom_archivo" id="arch_materia">
                    </div>                         
                    <input type="hidden" id="id_asignatura" name="id_asignatura">
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Modificar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>

        </div>
        </div>
    </div>


    <!-- Modal Bajas -->
    <div class="modal fade" id="myModalBajas">
        <div class="modal-dialog">
        <div class="modal-content">
            <form id="formEliminar">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="nom_eliminar"></h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    ¿Estas seguro de eliminar este temario?
                    
                    <input type="hidden" id="id_programa" name="id_programa" value="{{ $programa[0]->id_pro }}">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Eliminar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    {{-- Fin de sección de modals --}}
    {{-- Sección js --}}
    @section('js')
        <script>
            function obtDatEditar(pro)
            {

                $("#nom_update").val(pro['nombre']);
                $("#cla_update").val(pro['clave']); 
                $("#id_asignatura").val(pro['id']);                             
                r="{{url('contenido/carreras')}}/updatePlanEstudios/"+pro['id_pro'];
                $('#formEditar').attr('action', r);
            }

            function obtDatEliminar(pro)
            {
                $("#nom_eliminar").text(pro['nombre']);
                r="{{url('contenido/carreras')}}/destroyPlanEstudios/"+pro['id'];
                $('#formEliminar').attr('action', r);
            }

            //Metodo para obtener la especialidad que se esta trabajando
            function obtEspecialidad()
            {
                $("#id_esp").val($( "#id_especialidad" ).val() );
            }

            //Seleccionamos la opcion del select elegida por el usuario, cada ves que se carga la pagina
            $(document).ready(function()
            {
                $("#id_especialidad").val({{ $esp_act->id }});
            });
        </script>
    @endsection
    {{-- Fin de sección js --}}   
@endsection