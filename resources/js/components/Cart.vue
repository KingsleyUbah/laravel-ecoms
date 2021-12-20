<template>
    <div v-if="itemCount">
        <li class="nav-item">
            <a class="nav-link btn btn-danger" href="/checkout"><i class="fa fa-shopping-cart nav-link" aria-hidden="true"></i>Cart {{itemCount}}</a>
        </li>
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
                let response = await axios.post('/cart');
                this.itemCount = response.data.items
            }
        },
        created() {
            this.getCartItemsOnPageLoad();
        }
    }
</script>
