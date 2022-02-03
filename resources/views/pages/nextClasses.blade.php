<section class="container cards-section">

  <h1 class="display-6 mb-5 section-title"><span class="section-title-line">MASTERCLASES DISPONIBLES</span></h1>

  <div class="container cards-container">
    <div class="row justify-content-evenly gap-5">

      @foreach ($masterclasses as $masterclass)            
      <x-card component 
      :name="$masterclass->name"
      :date="$masterclass->date"
      :time="$masterclass->time"
      :vacants="$masterclass->vacants"
      :description="$masterclass->description"
      :image="$masterclass->image"
      />

      @endforeach   

    </div>
  </div>

  <div class="d-flex justify-content-end">
    {!! $masterclasses->appends(['masterclasses_out_date' => $masterclasses_out_date->currentPage()])->links() !!}
  </div>

</section>