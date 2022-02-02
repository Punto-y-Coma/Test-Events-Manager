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
        @foreach ($masterclasses2 as $masterclass2)
        <tr>
            <td>{{ $masterclass2->id }}</td>
            <td>{{ $masterclass2->name }}</td>
            <td>{{ $masterclass2->date }}</td>
            <td>{{ $masterclass2->time }}</td>
            <td>{{ $masterclass2->vacants }}</td>
            <td>{{ $masterclass2->description }}</td> 
            <td><img src="{{ $masterclass2->image }}" alt="">{{ $masterclass2->image }}</td> 
        </tr>
        @endforeach                      
    </tbody>
</table>

<div class="d-flex justify-content-end">
    {!! $masterclasses2->appends(['masterclasses' => $masterclasses->currentPage()])->links() !!}
</div>