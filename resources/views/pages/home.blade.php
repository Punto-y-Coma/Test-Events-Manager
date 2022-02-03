@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="display-6 mb-5 section-title"><span class="section-title-line">Mis masterclass</span></h1>

    <h4 class="welcome-user-title">¡Hola, {{ auth()->user()->name }}!</h4>

    <table class="table table-light">

        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Curso</th>
                <th>Fecha</th>
                <th>Plazas</th>
                <th>Descripción</th>
                <th>Imagen</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($masterclasses as $masterclass)
            <tr>
               <td>{{ $masterclass->id }}</td>
               <td>{{ $masterclass->name }}</td>
               <td>{{ $masterclass->date }}</td>
               <td>{{ $masterclass->vacants }}</td>
               <td>{{ $masterclass->description }}</td> 
               <td><img src="{{ $masterclass->image }}" alt="">{{ $masterclass->image }}</td> 
            </tr>
            @endforeach                      
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
      {!! $masterclasses->links() !!}
    </div>
</div>
@endsection