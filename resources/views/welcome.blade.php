@extends('layouts.app')

@section('content')

  <div class="container">

    <div>
      <h1 class="display-6 mb-5 section-title"><span class="section-title-line">MASTERCLASES DISPONIBLES</span></h1>
    </div>
{{-- 
    <table class="table table-light">

        <tbody id="welcome-card"> --}}

          <div class="container cards-container">
            <div class="row justify-content-evenly gap-5">
        
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
        
            </div>
          </div>

        {{-- </tbody>
          
    </table> --}}

    <div class="d-flex justify-content-end">
      {!! $masterclasses->links() !!}
    </div>

  </div>
  <div class="container">

    <div>
      <h1 class="display-6 mb-5 section-title"><span class="section-title-line">MASTERCLASES FINALIZADAS</span></h1>
    </div>

  {{--   <table class="table table-light">

      <tbody id="end-card"> --}}

        <div class="container cards-container">
          <div class="row justify-content-evenly gap-5">

            @foreach ($masterclasses_out_date as $masterclass)            {{-- @if ($masterclass->date > date("Y-m-d")) --}}
            <x-card-old component 
            :name="$masterclass->name"
            :date="$masterclass->date"
            :time="$masterclass->time"
            :vacants="$masterclass->vacants"
            :description="$masterclass->description"
            :image="$masterclass->image"
            />
            {{-- @endif --}}
            @endforeach   

          </div>
        </div>

    {{--   </tbody>
          
    </table> --}}

    <div class="d-flex justify-content-end">
      {!! $masterclasses_out_date->links() !!}
    </div>

  </div>
</div>


@endsection
