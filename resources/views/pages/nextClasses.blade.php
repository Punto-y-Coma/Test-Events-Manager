<div class="container">

    <div>
      <h1 class="display-6 mb-5">MASTERCLASES DISPONIBLES</h1>
      <hr/>
    </div>

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

    <div class="d-flex justify-content-end">
      {!! $masterclasses->appends(['masterclasses_out_date' => $masterclasses_out_date->currentPage()])->links() !!}
    </div>

</div>