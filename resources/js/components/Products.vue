<template>
  <div>
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active filter-button all" >All Products</li>
                  <li class="filter-button featured" v-on:click="fetchByCat(1, 'featured')">Featured</li>
                  <li class="filter-button flash" v-on:click="fetchByCat(1, 'flash')">Flash Deals</li>
                  <li class="filter-button lastminute" v-on:click="fetchByCat(1, 'last minute')">Last Minute</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid" v-if="allProducts">

                  
                    <div class="col-lg-4 col-md-4" v-for="product in allProducts" :key="product.id">
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
            <div class="pagination" v-if="isCategorized == true">
              <Page :total="pageInfo.total" :current="pageInfo.current_page" :page-size="parseInt(pageInfo.per_page)" @on-change="fetchByCat"/>
            </div>
            <div class="pagination" v-else>
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
                total: 9,
                pageInfo: null,
                isCategorized: false,
                activeCategory: '',
            }
        },
        methods: {
            async getProducts(page = 1) {                                           
                // Grab products from API
                console.log(page)
                const response = await axios.get(`/products/get?page=${page}&total=${this.total}`);
                
                if(response.data) {
                  this.isCategorized = false;
                  this.allProducts = response.data.products.data;
                  this.pageInfo = response.data.products;
                  this.userId = response.data.userId;
                }
              
            },
            async fetchByCat(page = 1, category = this.activeCategory) {
              const response = await axios.get(`/products/get?page=${page}&total=${this.total}&category=${category}`);              
              
              if(response.data) {
                this.isCategorized = true;
                this.activeCategory = category;
                this.allProducts = response.data.products.data;
                this.pageInfo = response.data.products;
                this.userId = response.data.userId;
                
                document.querySelectorAll('.filter-button').forEach((el) => {
                  el.classList.remove('active');
                })

                document.querySelector('.'+category).classList.add('active');
              }

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
