<div id="featured-slider" class="carousel slide" data-ride="carousel">

  <div class="carousel-indicators">

    @foreach ($masterclasses_featured as $featured_masterclass)

      <button type="button" data-bs-target="#featured-slider" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->index ? 'active' : '' }}" aria-current="{{ $loop->index ? 'true' : '' }}" aria-label="Slide {{ $loop->index }}"></button>

    @endforeach

  </div>

  <div class="carousel-inner">

    @foreach ($masterclasses_featured as $featured_masterclass)

    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

    <x-slider component 
      :name="$featured_masterclass->name"
      :date="$featured_masterclass->date"
      :time="$featured_masterclass->time"
      :vacants="$featured_masterclass->vacants"
      :image="$featured_masterclass->image"
      :id="$featured_masterclass->id"
    />

    </div>

    @endforeach
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#featured-slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#featured-slider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>