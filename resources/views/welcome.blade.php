@extends('layouts.app')

@section('content')
<div class="container">

    <H1>WELCOME</H1>

    <table class="table table-light">

        <tbody id="welcome-card">
        
            @foreach ($masterclasses as $masterclass)            {{-- @if ($masterclass->date > date("Y-m-d")) --}}
            <x-card component 
            :name="$masterclass->name"
            :date="$masterclass->date"
            :time="$masterclass->time"
            :vacants="$masterclass->vacants"
            :description="$masterclass->description"
            :image="$masterclass->image"
            />
            {{-- @endif --}}
            @endforeach   

        </tbody>
        
    </table>

    <div class="d-flex justify-content-end">
      {!! $masterclasses->links() !!}
    </div>

</div>
@endsection
