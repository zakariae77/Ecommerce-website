<script setup>
import axios from "axios";

const props = defineProps({
    product: Object,
});

async function addToCart(){

    let response = await axios.post('/cart',{'product_id':props.product.id});
    console.log(response);
}

</script>

<template>
    <a @click.prevent="addToCart" class=" border-2 border-purple-900 py-2 px-4 text-purple-900 rounded-md" href="">
        <i class="fa-solid fa-cart-shopping"></i> Order Now {{ response }}
    </a>
</template>


