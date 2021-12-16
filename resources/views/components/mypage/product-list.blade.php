
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
  <ul class="d-flex product-lists">
    @foreach($products as $product)
        <li class="product-list col-3">
          <a href="#!">
            <img src="https://www.cotta.jp/special/article/wp-content/uploads/2019/08/20190821_shizuka_eye.jpg" alt="">
            <p class="text-center">{{ $product['name'] }}<br>{{ $product['price'] }}<br>{{ $product['prefecture'] }}</p>
          </a>
        </li>

    @endforeach
  </ul>
  
