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
                <div class="row grid" v-if="allProducts">

                  
                    <div class="col-lg-4 col-md-4 filter featured" v-for="product in allProducts" :key="product.id">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_01.jpg" alt="" height="250px"></a>
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
                  

                </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="pagination">
              <Page :total="pageInfo.total" :current="pageInfo.current_page" :page-size="parseInt(pageInfo.per_page)" @on-change="getProducts"/>
            </div>
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
                userId: '',
                total: 6,
                pageInfo: null
                
            }
        },
        methods: {
            async getProducts(page = 1) {                                           
                // Grab products from API
                console.log(page)
                const response = await axios.get(`/products/get?page=${page}&total=${this.total}`);
                
                this.allProducts = response.data.products.data;
                this.pageInfo = response.data.products;
                this.userId = response.data.userId;
                
            }, 
        },
        
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            this.getProducts();
        }
    }
</script>
