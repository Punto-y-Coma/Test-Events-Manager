@extends('layouts.app')

@section('content')
<div class="container cards-section">

    <h1 class="display-6 mb-5 section-title"><span class="section-title-line">Mis masterclass</span></h1>

    <h4 class="welcome-user-title">¡Hola, {{ auth()->user()->name }}!</h4>
  
    <div class="container cards-container">
      <div class="row justify-content-evenly gap-5">
  
        @foreach ($user_events as $masterclass)            
        <x-card component 
        :name="$masterclass->name"
        :date="$masterclass->date"
        :time="$masterclass->time"
        :vacants="$masterclass->vacants"
        :description="$masterclass->description"
        :image="$masterclass->image"
        :featured="$masterclass->featured"
        :id="$masterclass->id"
        />
        @endforeach   
  
      </div>
    </div> 

    {{-- <div class="d-flex justify-content-end">
      {!! $user_events->links() !!}
    </div> --}}

</div>

@endsection