<div class="container">

    <div>
      <h1 class="display-6 my-5">MASTERCLASES FINALIZADAS</h1>
      <hr class=""/>
    </div>

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

    <div class="d-flex justify-content-end">
      {!! $masterclasses_out_date->appends(['masterclasses' => $masterclasses->currentPage()])->links() !!}
    </div>

</div>