<div class="card" 
    style="width: 25rem; background: #FFFFFF; border: 1px solid #6C757D; box-sizing: border-box; border-radius: 15px;">
    <img src="{{ $image }}" class="card-img-top" alt="..." 
    style="font-family: Roboto; font-style: normal; font-weight: bold; font-size: 25px; line-height: 29px; color: #000000;">
    
    <div class="card-body">
      <h5 class="card-title">{{ $name }}</h5>
      <h6 class="card-subtitle mb-2 text-muted" 
      style="float: left; font-family: Roboto; font-style: regular; font-size: 16px; line-height: 19px; line-height: 100%; vertical-align: Top; fill: Solid; color: #BDB5B5;">
      {{ $date }} {{ $time }}</h6>
      <h6 class="card-subtitle mb-2 text-muted" 
      style="float: right; font-family: Roboto; font-style: regular; font-size: 16px; line-height: 19px; line-height: 100%; vertical-align: Top; fill: Solid; color: #BDB5B5;">
      {{ $vacants }}</h6>
      <br>
      <p class="card-text" 
      style="font-family: Roboto; font-style: Regular; font-size: 16px; line-height: 19px; line-height: 100%; text-Align: Left; vertical-align: Top; fill: Solid; color: #000000;">
      {{ $description }}</p>
      <center><a href="#" class="btn btn-secondary" 
      style="font-family: Rounded Mplus 1c Bold; font-style: normal; font-weight: bold; font-size: 16px; line-height: 24px;">
      Inscríbete</a></center>
    </div>
  
</div>