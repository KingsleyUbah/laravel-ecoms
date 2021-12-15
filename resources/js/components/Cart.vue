<template>
    <div>
        <li class="nav-item">
            <a class="nav-link" href="/checkout">Cart {{itemCount}}</a>
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
