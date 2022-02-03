<div class="card col-lg-4 col-md-6 col-xs-12">
  <img src="{{ $image }}" class="card-img-top" alt="{{ $name }}">
  
  <div class="card-body">
    <h5 class="card-title">{{ $name }}</h5>
    <div class="card-date-time">
      <h6 class="card-subtitle mb-2 text-muted">
        {{ $date }} - {{ $time }}
      </h6>
      <h6 class="card-subtitle mb-2 text-muted">
        {{ $vacants }} plazas
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
          
            <p>YA ESTÁS SUBSCRITO</p>

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