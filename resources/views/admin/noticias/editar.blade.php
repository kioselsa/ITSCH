@extends('layouts.plant_admin')

@section('titulo')
    Articulos | Editar
@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('editor/jquery.cleditor.css') }}">
    <link rel="stylesheet" href="{{ asset('CustomFileInputs/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('CustomFileInputs/css/component.css') }}">
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
@endsection

@section('contenido')
    <div class="alert alert-success" id="mds-alert-success" role="alert" style="display:none;">
            
    </div>
    <div class="alert alert-danger" id="mds-alert-danger" role="alert" style="display:none;">
        
    </div>
    <div class="progress mb-3" id="mds-progress-bar-container" style="display:none">
        <div class="progress-bar progress-bar-striped progress-bar-animated" id="mds-progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
    </div>
    <form action="#" method="POST" id="submitForm" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Titulo</label>
            <input name="titulo" type="text" class="form-control" id="nombre" placeholder="Titulo del articulo" required value="{{ $article->titulo }}">
        </div>
        <div class="box">
            <input type="file" name="imagen" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados"/>
            <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Imágen de encabezado&hellip;</span></label>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Sintesis</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="sintesis" required placeholder="Una breve resumen del contenido del articulo">{{ $article->sintesis }}</textarea>
        </div>
        <textarea id="input" name="contenido" rows="20" required>{{ $article->contenido }}</textarea>
        <div class="input-group mb-3 input-group-sm">
             <div class="input-group-prepend">
               <span class="input-group-text">Fecha de inicio de la publicación</span>
            </div>
            <input class="form-control" type="date" name="fecha_pub" required value="{{ $article->fecha_pub }}">
        </div>
        <div class="input-group mb-3 input-group-sm">
            <div class="input-group-prepend">
               <span class="input-group-text">Fecha de termino de la publicación</span>
            </div>
            <input class="form-control" type="date" name="fecha_fin" required value="{{ $article->fecha_fin }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text">Tipo de publicación</span>
            </div>
            <select class="form-control" id="tipo" required name="resaltar">   
                <option value="">Selecciona un tipo</option>
                <option value="0">Sin resaltar</option>
                <option value="1">Resaltado</option>                
            </select>
        </div>

        <div class="form-group" style="width:200px; margin-left:auto; margin-right:auto;">
            <input type="file" name="archivos[]" id="archivos" class="inputfile inputfile-4 subida" data-multiple-caption="{count} archivos seleccionados" multiple />
            <label for="archivos" class="subida">
                <figure class="subida">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" class="subida">
                        <path class="subida" d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                    </svg>
                </figure> 
                <span class="subida">Seleccionar archivos&hellip;</span>
            </label>
        </div>
        
        <button type="submit" id="submit-all" class="btn btn-primary mt-2"> Guardar </button>
    </form>
    <div style="padding: 100px;"></div>
@endsection
@section('js')
    <script src="{{ asset('editor/jquery.cleditor.min.js') }}"></script>
    <script src="{{ asset('CustomFileInputs/js/custom-file-input.js') }}"></script>
    <script>
        document.getElementById('section-articulos').className += " default-text-color";
        $(document).ready(function () {
            $("#input").cleditor({
                height: 400
            });
        });
        $('#submitForm').on('submit', function(event){
            event.preventDefault();
            $('#mds-progress-bar-container').css('display','default');
            $('#mds-progress-bar-container').fadeIn(100);           
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        $('#mds-progress-bar').css('width',percentComplete+"%");
                        console.log(percentComplete);
                        if (percentComplete === 100) {

                        }
                    }
                    }, false);
                    return xhr;
                },
                method: "POST",
                url: "{{ route('admin.noticias.modificar', $article->id) }}",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success(response) {
                    response = response[0];
                    if(response['type'] == 'error'){
                        document.getElementById('mds-alert-danger').innerHTML = response['message'];
                        $('#mds-alert-danger').fadeIn();
                        $('#mds-alert-danger').fadeOut(3000);
                        console.log('Upload error');
                        setTimeout(function(){
                            $('#mds-progress-bar').css('width',"0%");
                            $('#mds-progress-bar-container').fadeOut(2000);
                        },2000);
                    }else{
                        document.getElementById('mds-alert-success').innerHTML = response['message'];
                        $('#mds-alert-success').fadeIn();
                        setTimeout(function(){
                            window.location.replace("{{ route('admin.noticias.inicio') }}");
                        },2000);
                    }
                },
                error(error) {
                    error = error[0];
                    document.getElementById('mds-alert-danger').innerHTM = error['message'];
                    $('#mds-progress-bar-container').fadeOut(3000);
                    $('#mds-alert-danger').fadeIn();
                    $('#mds-alert-danger').fadeOut(3000);
                    console.log('Upload error');
                },
            });
        });
    </script>
@endsection