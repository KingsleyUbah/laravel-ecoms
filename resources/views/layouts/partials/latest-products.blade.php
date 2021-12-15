<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          @foreach($products as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="{{$product->image_name}}" alt="product" height="250px"></a>
              <div class="down-content">
                <a href="#"><h4>{{ $product->name }}</h4></a>
                <h6>${{ $product->sale_price }}</h6>
                <p>{{ Str::limit($product->description, 80) }}</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <br>
                <span>Reviews (24)</span>
               <add-to-cart-button product-id="{{ $product->id }}"
                 user-id="{{ auth()->user()->id ?? 0 }}"/>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
