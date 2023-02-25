<script setup>
import axios from "axios";
</script>
<template>
    <div class="header__cart">
        <ul>
            <li>
                <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
            </li>
            <li>
                <router-link to="/cartitems">
                    <i class="fa fa-shopping-bag"></i>
                    <span>{{ cartItems.length }}</span>
                </router-link>
            </li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            cartItems: ""
        };
    },
    methods: {
        getCartItems() {
            axios.get("cart").then(response => {
                // alert(response.data);

                this.cartItems = response.data;
            });
        }
    },
    mounted() {
        this.getCartItems();
    }
};
</script>
<style></style>
