<template>
  <div>
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active filter-button" data-filter="all">All Products</li>
                  <li class="filter-button" data-filter="featured">Featured</li>
                  <li class="filter-button" data-filter="flash">Flash Deals</li>
                  <li class="filter-button" data-filter="limited">Last Minute</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">

                  <template v-if="featuredProducts.length">
                    <div class="col-lg-4 col-md-4 filter featured" v-for="product in featuredProducts" :key="product.id">
                      <div class="product-item">
                        <a href="#"><img :src="product.image_name" alt="" height="250px"></a>
                        <div class="down-content">
                          <a href="#"><h4>{{product.name}}</h4></a>
                          <h6>${{product.sale_price}}</h6>
                          <p>{{product.description}}</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>
                          <add-to-cart-button :product-id="product.id"
                          :user-id="userId"/>
                        </div>
                      </div>
                    </div>
                  </template>        

                  <template v-if="flashProducts.length">
                    <div class="col-lg-4 col-md-4 filter flash" v-for="product in flashProducts" :key="product.id">
                      <div class="product-item">
                        <a href="#"><img :src="product.image_name" alt="" height="250px"></a>
                        <div class="down-content">
                          <a href="#"><h4>{{product.name}}</h4></a>
                          <h6>${{product.sale_price}}</h6>
                          <p>{{product.description}}</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>
                          <add-to-cart-button :product-id="product.id"
                          :user-id="userId"/>
                        </div>
                      </div>
                    </div>
                  </template>        

                  <template v-if="limitedProducts.length">
                    <div class="col-lg-4 col-md-4 filter limited" v-for="product in limitedProducts" :key="product.id">
                      <div class="product-item">
                        <a href="#"><img :src="product.image_name" alt="" height="250px"></a>
                        <div class="down-content">
                          <a href="#"><h4>{{product.name}}</h4></a>
                          <h6>${{product.sale_price}}</h6>
                          <p>{{product.description}}</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>
                          <add-to-cart-button :product-id="product.id"
                          :user-id="userId"/>
                        </div>
                      </div>
                    </div>
                  </template>

                  <template v-if="genericProducts.length">
                    <div class="col-lg-4 col-md-4 filter" v-for="product in genericProducts" :key="product.id">
                      <div class="product-item">
                        <a href="#"><img :src="product.image_name" alt="" height="250px"></a>
                        <div class="down-content">
                          <a href="#"><h4>{{product.name}}</h4></a>
                          <h6>${{product.sale_price}}</h6>
                          <p>{{product.description}}</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>
                          <add-to-cart-button :product-id="product.id"
                          :user-id="userId"/>
                        </div>
                      </div>
                    </div>
                  </template>        

                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        data() {
            return {
                allProducts: [],
                userId: ''
            }
        },
        methods: {
            async getProducts() {                                           
                // Grab products from API
                const response = await axios.get('/products/get');
                this.allProducts = response.data.products;
                this.userId = response.data.userId;
            }
        },
        computed: {
            featuredProducts() {
              return this.allProducts.filter((item, allProducts) => item.category == "featured");
            },
            flashProducts() {
              return this.allProducts.filter((item, allProducts) => item.category == "flash");
            },
            limitedProducts() {
              return this.allProducts.filter((item, allProducts) => item.category == "last minute");
            },
            genericProducts() {
              return this.allProducts.filter((item, allProducts) => item.category == "none");
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            this.getProducts();
        }
    }
</script>
