<template>
    <div>
        <button class="btn btn-warning" v-on:click.prevent="addProductToCart()">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Add to Cart
        </button>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                haha: ''
            }
        },
        props: ['productId', 'userId'],
        methods: {
            async addProductToCart() {

                // if user is not logged in
                if(this.userId == 0) {
                    this.$toastr.e('You need to login to add this product to the cart');
                    return;
                }

                let response = await axios.post('/cart', {
                    'product_id': Number(this.productId)
                })

                this.$root.$emit('changeInCart', response.data.items)
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
