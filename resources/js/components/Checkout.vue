<template>
    <div>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Billing Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="First Name" v-model="firstName">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name"</label>
                                        <input class="form-control" type="text" placeholder="Last Name" v-model="lastName">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail" v-model="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="Mobile No" v-model="phoneNo">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Address" v-model="address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country</label>
                                        <select class="custom-select" v-model="country">
                                            <option selected>United States</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="City" v-model="city">
                                    </div>
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="State" v-model="state">
                                    </div>
                                    <div class="col-md-6">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="ZIP Code" v-model="lastName">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newaccount">
                                            <label class="custom-control-label" for="newaccount">Create an account</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto">
                                            <label class="custom-control-label" for="shipto">Ship to different address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="shipping-address">
                                <h2>Shipping Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name"</label>
                                        <input class="form-control" type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="Mobile No">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country</label>
                                        <select class="custom-select">
                                            <option selected>United States</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="City" v-model="city">
                                    </div>
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="State" v-model="state">
                                    </div>
                                    <div class="col-md-6">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="ZIP Code" v-model="zipCode">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Cart Total</h1>
                                <p>Product Name<span>$99</span></p>
                                <p class="sub-total">Sub Total<span>${{items.totalAmount}}</span></p>
                                <p class="ship-cost">Shipping Cost<span>$0</span></p>
                                <h2>Grand Total<span>${{items.totalAmount}}</span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Payment Methods</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Paypal</label>
                                        </div>
                                        <div class="payment-content" id="payment-1-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                            <label class="custom-control-label" for="payment-2">Payoneer</label>
                                        </div>
                                        <div class="payment-content" id="payment-2-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Check Payment</label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                            <label class="custom-control-label" for="payment-4">Direct Bank Transfer</label>
                                        </div>
                                        <div class="payment-content" id="payment-4-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                            <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                        </div>
                                        <div class="payment-content" id="payment-5-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <button v-on:click.prevent="getUserAddress()">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
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
				cardType: 'Visa',
				cardCode: '321',
				expirationMonth: 'January',
				expirationYear: '2025',
				cardNumber: ''
			}
		},
        methods: {
            async getUserAddress() {
                // document.getElementById('order-spinner').classList.add("spinner-border", "spinner-border-sm");

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
                       // document.getElementById('order-spinner').classList.remove("spinner-border", "spinner-border-sm");              

                        setTimeout(() => {
                            window.location.href = '/';
                        }, 700);
                    } else if(response.status == 200 && response.status.errMessage) {
                        this.$toastr.e(response.data.errMessage);    
                    } else {
                     
                        this.$toastr.e('Something went wrong');    
                        return;
                    }

				} else {
                   // document.getElementById('order-spinner').classList.remove("spinner-border", "spinner-border-sm");
					this.$toastr.e('Please complete the form to proceed');
                    return;
				}
			},

            async getCartItemsOnPageLoad(){
                let response = await axios.get('/cart/get/items');
				this.items = response.data 
				console.log(this.items);
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            this.getCartItemsOnPageLoad();
        }
    }
</script>
