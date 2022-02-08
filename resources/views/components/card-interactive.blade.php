<div class="card col-lg-4 col-md-6 col-xs-12">
    <img src="{{ $image }}" class="card-img-top" alt="{{ $name }}">
    
    <div class="card-body">
      <h5 class="card-title">{{ $name }}</h5>
      <div class="card-date-time">
        <h6 class="card-subtitle mb-2 text-muted">
          {{ $date }} - {{ $time }}
        </h6>
        <h6 class="card-subtitle mb-2 text-muted">
          {{ $masterclass->users()->count() }} / {{ $vacants }} plazas
        </h6>
      </div>
      <p class="card-text">
        {{ $description }}
      </p>
      
      <div class="card-btns">

        @if (Route::has('login'))
          @auth
            {{-- Intentar pulir la condicional del if refactorizando--}}
            @if (Auth::user()->masterclasses->find($id)) 
            
            <button class="btn btn-secondary inscription-btn-checked">
              <i class="bi bi-check-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                </svg>
              </i>
            </button>
  
            @elseif ($masterclass->users()->count() >= $masterclass->vacants)

              <button class="btn btn-secondary inscription-btn-maxed-out">Plazas llenas</button>

            @else
              <a href="{{ route('subscribe', $id) }}" class="btn btn-secondary">Inscríbete</a>
            @endif
            
          @else
            <a href="{{ route('login') }}" class="btn btn-secondary">Inscríbete</a>
          @endauth
        @endif
  
      </div>
    </div>  
  </div>