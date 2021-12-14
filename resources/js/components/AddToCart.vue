<template>
    <div>
        <button class="btn btn-warning" v-on:click.prevent="addProductToCart">
            Add to Cart
        </button>
    </div>
</template>

<script>
    export default {
        data(){

        },
        props: ['productId', 'userId'],
        methods: {
            addProductToCart() {
                if(this.userId == 0) {
                    this.$toastr.e('You need to login to add this product to the cart');
                    return;
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
