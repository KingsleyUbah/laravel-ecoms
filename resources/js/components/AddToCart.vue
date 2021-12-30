<template>
    <a class="btn" v-on:click.prevent="addProductToCart()"><i class="fa fa-shopping-cart"></i>Buy Now</a>
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

                let response = await axios.post('/tocart', {
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
