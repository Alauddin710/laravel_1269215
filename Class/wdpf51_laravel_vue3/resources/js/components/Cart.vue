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
                <a href="#"
                    ><i class="fa fa-shopping-bag"></i>
                    <span>{{ cartItems }}</span></a
                >
            </li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    {{ getCartItems }}
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
            axios.get("api/cart").then(response => {
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
