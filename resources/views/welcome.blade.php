@extends('layouts.app')

@section('content')
  <div class="container">

    @include('pages.featuredClasses')
    @include('pages.nextClasses')
    @include('pages.previousClasses')
    
  </div>
@endsection