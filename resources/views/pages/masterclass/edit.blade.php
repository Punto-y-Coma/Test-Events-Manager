@extends('layouts.app')

@section('content')

<div class="container main-container create-container">

    <h1 class="display-6 mb-5 section-title"><span class="section-title-line">Editar masterclass</span></h1>

    <div>
        <form action="{{ route('masterclass.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="title" name="name" placeholder="Título de la MasterClass" required value="{{ $data->name }}">
                <label for="title">Título de la MasterClass</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="datepicker" name="date" placeholder="Fecha" required value="{{ $data->date }}">
                <label for="datepicker"></label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="timepicker" name="time" placeholder="Hora de inicio" required value="{{ $data->time }}">
                <label for="timepicker"></label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" min="1" pattern="\d+" class="form-control" id="plazas" name="vacants" placeholder="Plazas" required value="{{ $data->vacants }}">
                <label for="plazas">Plazas</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Descripción de la MasterClass" id="descripcion" name="description" style="height: 100px">{{ $data->description }}</textarea>
                <label for="descripcion">Descripción</label>
            </div>

            <div class="form mb-3">
                <label for="image">Imagen de la Masterclass</label>
                <img src="{{ asset('storage').'/'.$data->image }}" alt="{{ $data->name }}">
                <input type="file" class="form-control" id="image" name="image" placeholder="Image" value="{{ $data->image }}">
            </div>

            <div class="create-masterclass-btns">
                <input class="btn btn-primary mb-3 btn-accept" type="submit" value="Guardar">
                <a href="{{ route('home')}}" alt="home" class="btn btn-secondary mb-3 btn-cancel">
                    Cancelar
                </a>

                @if($data->featured != 0)
                    <div class="form-check">
                        <input class="form-check-input form-control" type="checkbox" value="1" id="featured" name="featured" checked>
                        <label class="form-check-label" for="featured">
                          Destacada
                        </label>
                    </div>
                @else 
                    <div class="form-check">
                        <input class="form-check-input form-control" type="checkbox" value="1" id="featured" name="featured">
                        <label class="form-check-label" for="featured">
                          Destacada
                        </label>
                    </div>
                @endif
            </div>

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