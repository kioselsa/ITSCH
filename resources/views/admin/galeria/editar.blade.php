@extends('template')

@section('titulo')
    Album | Editar
@endsection

@section('contenido')
    <form action="{{ route('admin.galeria.actualizar',['id' => $gallery->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="nombre">Titulo</label>
        <input name="titulo" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Titulo del album" value="{{ $gallery->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Agrege una breve descripción del album de fotos." style="letter-spacing: normal !important;|">{{ $gallery->descripcion }}</textarea>
        </div>
        <button name="" type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <div style="padding: 100px;"></div>
    @section('js')
        <script>
            var section = document.getElementById('section-galeria');
            section.className += " default-text-color";
        </script>
    @endsection
@endsection