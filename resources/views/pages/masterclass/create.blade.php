@extends('layouts.app')

@section('content')

<div class="container create-container">

    <h1 class="display-6 mb-5 section-title"><span class="section-title-line">CREAR MASTERCLASS</span></h1>

    <div>
        <form action="{{ route('masterclass.store') }}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="title" name="name" placeholder="Título de la MasterClass">
                <label for="title">Título de la MasterClass</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="datepicker" name="date" placeholder="Fecha">
                <label for="datepicker"></label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="timepicker" name="time" placeholder="Hora de inicio" >
                <label for="timepicker"></label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="plazas" name="vacants" placeholder="Plazas">
                <label for="plazas">Plazas</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Descripción de la MasterClass" id="descripcion" name="description" style="height: 100px"></textarea>
                <label for="descripcion">Descripción</label>
            </div>

            <div class="form mb-3">
                <label for="image">Imagen de la Masterclass</label>
                {{-- <input type="file" class="form-control" id="image" name="image" placeholder="Imagen"> --}}
                <input type="url" class="form-control" id="image" name="image" placeholder="https://example.com" pattern="https://.*" size="38" required>
            </div>

            <input class="btn btn-primary mb-3" type="submit" value="Aceptar">
            <input class="btn btn-secondary mb-3" type="reset" value="Cancelar">

            <script>
                $('#datepicker').datepicker({
                    uiLibrary: 'bootstrap4'
                });
            </script>

            <script>
                $('#timepicker').timepicker({
                    uiLibrary: 'bootstrap4'
                });
            </script>
        </form>
    </div>
</div>

@endsection