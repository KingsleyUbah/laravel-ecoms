<template>
    <a class="btn" v-on:click.prevent="addProductToWishlist()"><i class="fa fa-heart"></i></a>
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
            async addProductToWishlist() {

                // if user is not logged in
                if(this.userId == 0) {
                    this.$toastr.e('You need to login to add this product to your wishlist');
                    return;
                }

                let response = await axios.post('/towishlist', {
                    'product_id': Number(this.productId)
                })

                this.$root.$emit('changeInWishlist', response.data.list)
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
