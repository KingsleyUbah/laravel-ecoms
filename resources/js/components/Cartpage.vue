<template>
    <div>
         <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr v-for="item in items" :key="item.id">
                                            <td v-if="item.name">
                                                <div class="img">
                                                    <a href="#"><img :src="item.image" alt="Image"></a>
                                                    <p>{{ item.name }}</p>
                                                </div>
                                            </td>
                                            <td>${{item.sale_price}}</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus" v-on:click.prevent="decrement(item.id)"><i class="fa fa-minus"></i></button>
                                                    <input type="text" :value="item.quantity">
                                                    <button class="btn-plus" v-on:click.prevent="increment(item.id)"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>${{item.sale_price}}</td>
                                            <td><button v-on:click.prevent="deleteItem(item.id)"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Sub Total<span>${{items.totalAmount}}</span></p>
                                            <p>Shipping Cost<span>$0</span></p>
                                            <h2>Grand Total<span>${{items.totalAmount}}</span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <button v-on:click.prevent="clearCart()">Clear Cart</button>
                                            <button href="/checkout">Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
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
                let response = await axios.post('/cart/item/increment', {
						'product_id': id,
					});
				this.items = response.data 
				console.log(this.items);
			},
            async decrement(id) {
                let response = await axios.post('/cart/item/decrement', {
						'product_id': id,
					});
				this.items = response.data 
			},
            async deleteItem(id) {
                let response = await axios.post('/cart/delete/item', {
						'product_id': id,
					});

                if(response.data) {
                    this.$toastr.s('Item Deleted!');
                    this.items = response.data 
                }
				
			},
            async clearCart() {
                let response = await axios.get('/cart/clear');

                if(response.data.success) {
                    this.$toastr.s(response.data.success);

                    setTimeout(() => {
                            window.location.href = '/';
                    }, 700);
                } else {
                    this.$toastr.e(response.data.error);
                }
				
			},
			async getCartItems() {
				let response = await axios.get('/cart/get/items');
				this.items = response.data 
				console.log(this.items);
			},
		},
        mounted() {
            console.log('Cart mounted.')
        },
		created() {
			this.getCartItems();
		}
    }
</script>
