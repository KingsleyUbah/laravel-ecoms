<div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Featured Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    @foreach($clothes as $cloth)
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">{{$cloth->name}}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="">
                                    <img src="img/product-1.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>{{$cloth->sale_price}}</h3>
                                <add-to-cart-button product-id="{{ $cloth->id }}"
                                user-id="{{ auth()->user()->id ?? 0 }}"/>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>