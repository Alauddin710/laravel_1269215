<template>
    <li>
        <a href="#" @click.prevent="addProducttoCart()"
            ><i class="fa fa-shopping-cart"></i
        ></a>
    </li>
</template>
<script>
export default {
    props: ["prId"],
    methods: {
        addProducttoCart() {
            // alert("Your Product ID: " + this.prId);
            axios.post("cart", { prid: this.prId }).then(response => {
                console.log(response.data);
            });
        }
    }
};
</script>
<style></style>
