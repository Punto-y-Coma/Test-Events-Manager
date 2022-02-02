@extends('layouts.app')

@section('content')

    <div class="container">

    <h1 class="display-6 mb-5 section-title"><span class="section-title-line">MASTERCLASES DISPONIBLES</span></h1>


    <div>
        <button type="button" class="btn btn-custom btn-gray" value="add_masterclass"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus" viewBox="0 0 20 20">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></button>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Vacants</th>
                <th scope="col">Description</th>
                <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square" viewBox="0 0 20 20">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
                  </svg></th>
                <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 20 20">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                  </svg></th>
                <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 20 20">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                  </svg></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($masterclasses as $masterclass)  
                <x-admin-table-cell component 
                    :id="$masterclass->id"
                    :name="$masterclass->name"
                    :date="$masterclass->date"
                    :time="$masterclass->time"
                    :vacants="$masterclass->vacants"
                    :description="$masterclass->description"
                />
            @endforeach  
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {!! $masterclasses->links() !!}
    </div>

    </div>

@endsection
