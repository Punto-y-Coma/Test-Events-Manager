<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Curso</th>
            <th>Fecha</th>
            <th>Hora</th>
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
            <td>{{ $masterclass->time }}</td>
            <td>{{ $masterclass->vacants }}</td>
            <td>{{ $masterclass->description }}</td> 
            <td><img src="{{ $masterclass->image }}" alt="">{{ $masterclass->image }}</td> 
        </tr>
        @endforeach                      
    </tbody>
</table>

<div class="d-flex justify-content-end">
    {!! $masterclasses->appends(['masterclasses2' => $masterclasses2->currentPage()])->links() !!}
</div>


