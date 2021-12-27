
 <div class="container PB-5 p-3">
  <div id="carousel-card" class="carousel slide" data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#carousel-card" data-slide-to="0" class="active">
        <img src="https://placehold.it/100x50" alt="img">
      </li>
      <li data-target="#carousel-card" data-slide-to="1">
        <img src="https://placehold.it/100x50" alt="img">
      </li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item px-5 active">
        <div class="row">
          @foreach($products as $product)
          <div class="col-4">
            <div class="card product-list">
              <img class="card-img-top" src="https://m.media-amazon.com/images/I/710S7WpBL+L._AC_SX679_.jpg" alt="Card image cap">
              <div class="card-body p-2">
                <h5 class="card-title">
                  <span class="text">{{ $product['name'] }}</span>
                </h5>
                <p class="small">
                  <span class="text">{{ $product['prefecture'] }}</span><br>
                  <span class="text">{{ $product['price'] }}</span>
                </p>
              </div>
            </div>
          </div>
          @endforeach          
        </div>
      </div>
      
      <div class="carousel-item px-5">
        <div class="row">
        @foreach($products as $product)
          <div class="col-4">
            <div class="card product-list">
              <img class="card-img-top" src="https://m.media-amazon.com/images/I/710S7WpBL+L._AC_SX679_.jpg" alt="Card image cap">
              <div class="card-body p-2">
                <h5 class="card-title">
                  <span class="">{{ $product['name'] }}</span>
                </h5>
                <p class="small">
                  <span class="">{{ $product['prefecture'] }}</span><br>
                  <span class="">{{ $product['price'] }}</span>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carousel-card" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-card" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

