<template>    
    <a href="/wishlist" class="btn wishlist">
        <i class="fa fa-heart"></i>
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
            this.$root.$on('changeInWishlist', (list) => {
                this.itemCount = list;
                this.$toastr.s('Product Added to Wishlist!');
            })
        },
        methods: {
            async getWishlistItemsOnPageLoad(){
                let response = await axios.post('/towishlist');
                this.itemCount = response.data.list
            }
        },
        created() {
            this.getWishlistItemsOnPageLoad();
        }
    }
</script>
