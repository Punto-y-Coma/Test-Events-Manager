@extends('layouts.app')

@section('content')
  @include('pages.featuredClasses')
  <div class="container main-container">

    @include('pages.nextClasses')
    @include('pages.previousClasses')
    
  </div>
@endsection