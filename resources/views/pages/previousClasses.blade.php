<section class="cards-section">

  <a name="previousClasses"></a>

  <h1 class="display-6 mb-5 section-title"><span class="section-title-line">MASTERCLASES FINALIZADAS</span></h1>

  <div class="container cards-container">
    <div class="row justify-content-evenly gap-5">

      @foreach ($masterclasses_out_date as $masterclass)            
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

  <div class="d-flex justify-content-end">
    {!! $masterclasses_out_date->appends(['masterclasses' => $masterclasses->currentPage()])->fragment('previousClasses')->links() !!}
  </div>

</section>