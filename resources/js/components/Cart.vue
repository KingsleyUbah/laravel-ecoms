<template>
    <a href="/cart" class="btn cart">
        <i class="fa fa-shopping-cart"></i>
        <span>({{ itemCount }})</span>
    </a>
</template>

<script>import axios from "axios";

    export default {
        data() {
            return {
                itemCount: ''
            }
        },
        mounted() {
            this.$root.$on('changeInCart', (item) => {
                this.itemCount = item;
                this.$toastr.s('Product Added to Cart!');
            })
        },
        methods: {
            async getCartItemsOnPageLoad(){
                let response = await axios.post('/cart');
                this.itemCount = response.data.items
            }
        },
        created() {
            this.getCartItemsOnPageLoad();
        }
    }
</script>
