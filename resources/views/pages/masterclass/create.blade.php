@extends('layouts.app')

@section('content')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<div style="width:300px">
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
        <input type="text" class="form-control" id="timepicker" name="time" placeholder="Hora del curso" >
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
        <input type="file" class="form-control" id="image" name="image" placeholder="Imagen">
        
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

@endsection