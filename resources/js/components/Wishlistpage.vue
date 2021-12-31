<template>
    <div>
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Wishlist</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Wishlist Start -->
        <div class="wishlist-page">
            <div class="container-fluid">
                <div class="wishlist-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Unit Price</th>
                                            <th>Quantity</th>
                                            <th>Add to Cart</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr v-for="item in items" :key="item.id">
                                            <td v-if="item.name">
                                                <div class="img">
                                                    <a href="#"><img :src="item.image" alt="Image"></a>
                                                    <p>{{item.name}}</p>
                                                </div>
                                            </td>
                                            <td v-if="item.name">${{item.sale_price}}</td>
                                            <td v-if="item.name">
                                                <div class="qty">
                                                    <button class="btn-minus" v-on:click.prevent="decrement(item.id)"><i class="fa fa-minus"></i></button>
                                                    <input type="text" :value="item.quantity">
                                                    <button class="btn-plus" v-on:click.prevent="increment(item.id)"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td v-if="item.name"><button class="btn-cart" v-on:click.prevent="moveToCart(item.id, item.quantity)">Add to Cart</button></td>
                                            <td v-if="item.name"><button v-on:click.prevent="deleteItem(item.id)"><i class="fa fa-trash"></i></button></td>
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist End -->
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
