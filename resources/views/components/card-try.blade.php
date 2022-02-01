<section>
    
      <div>
        <h1 class="display-6">MASTERCLASES FINALIZADAS</h1>
        <hr/>
      </div>
  
      <div class="container">
        <div class="row">

            @foreach ($masterclasses as $masterclass)
      
                <div class="col">
                
                    <div class="card" style="width: 18rem;">
                        <img src={{$masterclass->image}} class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">{{$masterclass->name}}</h3>
                        <h5 class="card-title">{{$masterclass->date}}</h5>
                        <p class="card-text">{{$masterclass->description}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    
                </div>

            @endforeach

        </div>
    </div>

    <div>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      
      
      </div>
</section>