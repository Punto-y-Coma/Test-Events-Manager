@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Mis masterclasses</h2>
    <h4>Hola, {{ auth()->user()->name }} </h4>

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
            @foreach ($user_events as $masterclass)
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

   {{--  <div class="d-flex justify-content-end">
      {!! $user_events->links() !!}
    </div> --}}
</div>
@endsection