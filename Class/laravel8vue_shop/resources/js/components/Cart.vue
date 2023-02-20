<template lang="">
    {{ itemCount }}
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            itemCount: ""
        };
    },
    created() {
        this.get_cart_items();
    },
    methods: {
        async get_cart_items() {
            await axios.post("/cart").then(function(response) {
                this.itemCount = response.data.items;
                console.log(response.data.items);
            });
        }
    }
};
</script>
<style lang=""></style>
