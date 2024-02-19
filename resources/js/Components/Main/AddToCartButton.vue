<script setup>
import axios from 'axios';
import { useStore } from 'vuex';

const store = useStore();
const props = defineProps({
    product: Object,
});

async function addToCart() {
    try {
        const response = await axios.post('/cart', { 'product_id': props.product.id });
        // Assuming the response.data contains the updated basket_count
        const basketCount = response.data.basket_count;

        // Update the basket count in the Vuex store
        store.commit('setBasketCount', basketCount);
        console.log("basket count", basketCount);
    } catch (error) {
        console.error('Error adding to cart:', error);
    }
}
</script>

<template>
    <a @click.prevent="addToCart" class="border-2 border-purple-900 py-2 px-4 text-purple-900 rounded-md" href="">
        <i class="fa-solid fa-cart-shopping"></i> Order Now
    </a>
</template>
