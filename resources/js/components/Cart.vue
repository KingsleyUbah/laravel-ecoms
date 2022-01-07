<template>
    <div class="well well-small">
        <a id="myCart" href="/cart">
            <img src="themes/images/ico-cart.png" alt="cart">{{itemCount}} Items in your cart  
            <span class="badge badge-warning pull-right">$155.00</span>
        </a>
    </div>    
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
                let response = await axios.post('/tocart');
                this.itemCount = response.data.items
            }
        },
        created() {
            this.getCartItemsOnPageLoad();
        }
    }
</script>
