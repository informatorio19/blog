@extends('layouts.dashboard')

@section('content')
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Titulo</label>
        <input type="text" class="form-control" name="titulo">
    </div>
    <div class="form-group">
        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="descripcion">
    </div>

    <div class="form-group">
        <label for="">Contenido</label>
        <textarea type="text" class="form-control" name="contenido">
        </textarea>
        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>

        <div class="form-group">
            <label for="">Categorias</label>
            <select name="categorias[]" id="" class="form-control" multiple>
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>

                @endforeach
            </select>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
