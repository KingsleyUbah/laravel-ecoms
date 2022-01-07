<template>
    <div id="mainBody">
        <div class="container">
            <div class="row">
                 <!-- Sidebar ================================================== -->
                <div id="sidebar" class="span3">
                    <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
                    <ul id="sideManu" class="nav nav-tabs nav-stacked">
                        <li class="subMenu open"><a> ELECTRONICS [230]</a>
                            <ul>
                            <li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
                            </ul>
                        </li>
                        <li class="subMenu"><a> CLOTHES [840] </a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
                        </ul>
                        </li>
                        <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
                            <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
                            <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
                        </ul>
                        </li>
                        <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
                        <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
                        <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
                    </ul>
                    <br/>
                    <div class="thumbnail">
                        <img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
                        <div class="caption">
                        <h5>Panasonic</h5>
                            <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                        </div>
                    </div><br/>
                        <div class="thumbnail">
                            <img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
                            <div class="caption">
                            <h5>Kindle</h5>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div><br/>
                        <div class="thumbnail">
                            <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
                            <div class="caption">
                            <h5>Payment Methods</h5>
                            </div>
                        </div>
                </div>
                <!-- Sidebar end=============================================== -->
                <div class="span9">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active"> SHOPPING CART</li>
                    </ul>
                    <h3>  WISHLIST [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
                    <hr class="soft"/>
                                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Quantity/Update</th>
                            <th>Price</th>                            
                            <th>Total</th>
                            <th>Move To Cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in items" :key="item.id">
                                <td v-if="item.name"> 
                                    <img width="60" :src="item.image" alt=""/>
                                </td>
                                <td v-if="item.name">
                                    MASSA AST<br/>{{item.description}}
                                </td>
                                <td v-if="item.name">
                                    <div class="input-append">                                                                        
                                        <button class="btn" type="button" v-on:click.prevent="decrement(item.id)"><i class="icon-minus"></i></button>
                                        <input type="text" :value="item.quantity" class="span1" style="max-width:34px" id="appendedInputButtons">
                                        <button class="btn" type="button" v-on:click.prevent="increment(item.id)"><i class="icon-plus"></i></button>
                                        <button class="btn btn-danger" type="button" v-on:click.prevent="deleteItem(item.id)"><i class="icon-remove icon-white"></i></button>				
                                    </div>
                                </td>
                                <td v-if="item.name">${{item.sale_price}}</td>                                
                                <td v-if="item.name">${{item.sale_price * item.quantity}}</td>
                                <td v-if="item.name">
                                    <a class="btn btn-warning" v-on:click.prevent="moveToCart(item.id, item.quantity)">
                                        Add To Cart
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                                                		
                    <a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Back</a>
                    <a href="/cart" class="btn btn-large pull-right">View Cart <i class="icon-arrow-right"></i></a>            
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
			return {
				items: [],
			}
		},
		methods: {
            async increment(id) {
                let response = await axios.post('/wishlist/item/increment', {
						'product_id': id,
					});
				this.items = response.data 
				console.log(this.items);
			},
            async decrement(id) {
                let response = await axios.post('/wishlist/item/decrement', {
						'product_id': id,
					});
				this.items = response.data 
			},
            async deleteItem(id) {
                let response = await axios.post('/wishlist/delete/item', {
						'product_id': id,
					});

                if(response.data) {
                    this.$toastr.s('Item Deleted!');
                    this.items = response.data 
                }
				
			},
            async moveToCart(id, quantity) {
                let response = await axios.post('/wishlist/item/move', {
						'product_id': id,
                        'quantity': quantity,
					});

                
                if(response.data) {
                    this.$toastr.s('Item Added To Cart!');
                    this.items = response.data.list;

                    location.reload();
                }

			},
			async getWishlistItems() {
				let response = await axios.get('/wishlist/get/items');
				this.items = response.data 
				console.log(this.items);
			},
		},
        mounted() {
            console.log('Cart mounted.')
        },
		created() {
            this.getWishlistItems();	
		}
    }
</script>
