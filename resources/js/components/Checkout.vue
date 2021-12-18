<template>
    <div>
    <div class="cart-wrap">
		<div class="container">
	        <div class="row">
			    <div class="col-lg-8">
			        <div class="main-heading">Products in your cart</div>
			        <div class="table-cart">
	                    <table>
	                        <thead>
	                            <tr>
	                                <th>Product</th>
	                                <th>Quantity</th>
	                                <th>Total</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr v-for="item in items" :key="item.id">
	                                <td v-if="item.name">
	                                	<div class="display-flex align-center">
		                                    <div class="img-product">
		                                        <img :src="item.image" height=80>
		                                    </div>
		                                    <div class="name-product">
		                                        {{item.name}}
		                                    </div>
		                                    <div class="price">
		                                        {{item.sale_price}}
		                                    </div>
	                                    </div>
	                                </td>
	                                <td class="product-count" v-if="item.name">
	                                    <form action="#" class="count-inlineflex">
										    <div class="qtyminus">-</div>
										    <input type="text" name="quantity" :value="item.quantity" class="qty">
										    <div class="qtyplus">+</div>
										</form>
	                                </td>
	                                <td v-if="item.name">
	                                    <div class="total">
	                                        ${{item.total}}
	                                    </div>
	                                </td>
	                                <td v-if="item.name">
	                                    <a href="#" title="">
	                                        <img src="images/icons/delete.png" alt="" class="mCS_img_loaded">
	                                    </a>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                    <div class="coupon-box">
	                        <form action="#" method="get" accept-charset="utf-8">
	                            <div class="coupon-input">
	                                <input type="text" name="coupon code" placeholder="Coupon Code">
	                                <button type="submit" class="round-black-btn">Apply Coupon</button>
	                            </div>
	                        </form>
	                    </div>
			        </div>
			        <!-- /.table-cart -->

					<!-- payment information -->
					<div class="container wrapper" style="margin-top: 50px; padding-top: 30px;">
            <div class="row cart-head">
                <div class="container">
                <div class="row">
                    <p></p>
                </div>
                
                <div class="row">
                    <p></p>
                </div>
                </div>
            </div>    
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Shipping Address</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Country:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="country" v-model="country"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>First Name:</strong>
                                    <input type="text" name="first_name" class="form-control" v-model="firstName"/>
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Last Name:</strong>
                                    <input type="text" name="last_name" class="form-control" v-model="lastName"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" v-model="address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>City:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control" v-model="city"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>State:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="state" class="form-control" v-model="state" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="zip_code" class="form-control" v-model="zipCode" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Phone Number:</strong></div>
                                <div class="col-md-12"><input type="text" name="phone_number" class="form-control" v-model="phoneNo"/></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email Address:</strong></div>
                                <div class="col-md-12"><input type="text" name="email_address" class="form-control" v-model="email"/></div>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                    <!--CREDIT CART PAYMENT-->
                    <div class="panel panel-info" style="margin-top: 50px;">
                        <div class="panel-body">
							<div class="form-group">
                                <div class="col-md-12">
                                    <h4>Card Information</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card Type:</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="CreditCardType" class="form-control" v-model="cardType">
                                        <option value="5">Visa</option>
                                        <option value="6">MasterCard</option>
                                        <option value="7">American Express</option>
                                        <option value="8">Discover</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_number" v-model="cardNumber" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card CVV:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_code" v-model="cardCode" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Expiration Date</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="" v-model="expirationMonth">
                                        <option value="">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="" v-model="expirationYear">
                                        <option value="">Year</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span>Pay secure using your credit card.</span>
                                </div>
                                <div class="col-md-12">
                                    <ul class="cards">
                                        <li class="visa hand">Visa</li>
                                        <li class="mastercard hand">MasterCard</li>
                                        <li class="amex hand">Amex</li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
							<br>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix" v-on:click.prevent="getUserAddress()">
                                        Place Order
                                        <span class="" id="order-spinner"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CREDIT CART PAYMENT END-->
                </div>
                
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
    				</div>
			    	</div>
			    <!-- /.col-lg-8 -->
			    <div class="col-lg-4">
			        <div class="cart-totals">
			            <h3>Cart Totals</h3>
			            <form action="#" method="get" accept-charset="utf-8">
			                <table>
			                    <tbody>
			                        <tr>
			                            <td>Subtotal</td>
			                            <td class="subtotal">${{items.totalAmount}}</td>
			                        </tr>
			                        <tr>
			                            <td>Shipping</td>
			                            <td class="free-shipping">Free Shipping</td>
			                        </tr>
			                        <tr class="total-row">
			                            <td>Total</td>
			                            <td class="price-total">${{items.totalAmount}}</td>
			                        </tr>
			                    </tbody>
			                </table>
			                <div class="btn-cart-totals">
			                    <a href="#" class="update round-black-btn" title="">Update Cart</a>
			                    <a href="#" class="checkout round-black-btn" title="">Proceed to Checkout</a>
			                </div>
			                <!-- /.btn-cart-totals -->
			            </form>
			            <!-- /form -->
			        </div>
			        <!-- /.cart-totals -->
			    </div>
			    <!-- /.col-lg-4 -->
			</div>
		</div>
	</div>
    <!-- Button to Open the Modal -->
<button type="button" id="modalButton" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div style="text-align:center; width:80vw; height:80vh;">
            <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                <span class="swal2-success-line-tip"></span>
                <span class="swal2-success-line-long"></span>
                <div class="swal2-success-ring"></div> 
                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
            </div>

            <h1>Order Successfully completed. Keep shopping?</h1>
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
				items: [],
				firstName: '',
				lastName: '',
				email: '',
				address: '',
				city: '',
				state: '',
				zipCode: '',
				country: '',
				phoneNo: '',
				cardType: '',
				cardCode: '',
				expirationMonth: '',
				expirationYear: '',
				cardNumber: ''
			}
		},
		methods: {
			async getCartItems() {
				let response = await axios.get('/checkout/get/items');
				this.items = response.data 
				console.log(this.items);
			},

			async getUserAddress() {
                document.getElementById('order-spinner').classList.add("spinner-border", "spinner-border-sm");

				if(this.firstName != '' && this.lastName != '' && this.cardNumber && this.cardCode) {
					let response = await axios.post('process/user/payment', {
						'firstName': this.firstName,
						'lastName': this.lastName,
						'email': this.email,
						'address': this.address,
						'city': this.city,
						'state': this.state,
						'zipCode': this.zipCode,
						'country': this.country,
						'phoneNo': this.phoneNo,
						'cardType': this.cardType,
						'cardCode': this.cardCode,
						'expirationMonth': this.expirationMonth,
						'expirationYear': this.expirationYear,
						'cardNumber': this.cardNumber,
                        'amount': this.items.totalAmount,
                        'order': this.items
					});

                    
                    if(response.status == 200 && response.data.success) {
                        document.getElementById('order-spinner').classList.remove("spinner-border", "spinner-border-sm");
                        document.getElementById('modalButton').click();

                        setTimeout(() => {
                            window.location.href = '/';
                        }, 700);
                    } else if(response.status == 200 && response.status.errMessage) {
                        document.getElementById('order-spinner').classList.remove("spinner-border", "spinner-border-sm");

                        this.$toastr.e(response.data.errMessage);    
                    } else {
                        document.getElementById('order-spinner').classList.remove("spinner-border", "spinner-border-sm");
                        this.$toastr.e('Something went wrong');    
                        return;
                    }

				} else {
					this.$toastr.e('Please complete the form to proceed');
                    return;
				}
			}
		},
        mounted() {
            console.log('Checkout mounted.')
        },
		created() {
			this.getCartItems();
		}
    }
</script>
