@extends('layouts.app')

@section('content')
  @include('pages.slider')
  <div class="container">

    <div>
      <h1 class="display-6 mb-5">MASTERCLASES DISPONIBLES</h1>
      <hr/>
    </div>
{{-- 
    <table class="table table-light">

        <tbody id="welcome-card"> --}}

          <div class="container">
            <div class="row">

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
      <h1 class="display-6 my-5">MASTERCLASES FINALIZADAS</h1>
      <hr class=""/>
    </div>

  {{--   <table class="table table-light">

      <tbody id="end-card"> --}}

        <div class="container">
          <div class="row">

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
