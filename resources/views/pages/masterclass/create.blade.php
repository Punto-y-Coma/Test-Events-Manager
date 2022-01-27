@extends('layouts.app')

@section('content')

<form action="{{ url('/pages/masterclass') }}" method="post" enctype="multipart/form-data">
@csrf

    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="titulo" placeholder="Título de la MasterClass">
        <label for="titulo">Título de la MasterClass</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="fecha" placeholder="Fecha">
        <label for="fecha">Fecha de la MasterClass</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="plazas" placeholder="Plazas">
        <label for="plazas">Plazas</label>
    </div>

    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Descripción de la MasterClass" id="descripcion" style="height: 100px"></textarea>
        <label for="descripcion">Descripción</label>
    </div>

    <div class="form mb-3">
        <label for="image">Imagen de la Masterclass</label>
        <input type="file" class="form-control" id="image" placeholder="Imagen">
        
    </div>


    <input class="btn btn-primary mb-3" type="submit" value="Aceptar">
    <input class="btn btn-secondary mb-3" type="reset" value="Cancelar">


</form>

@endsection