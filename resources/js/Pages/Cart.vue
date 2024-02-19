<script setup>
import { Head, Link } from "@inertiajs/vue3";
import frontend from "../Layouts/FrontEnd.vue";
import cart_comp from "../Components/Main/Cart.vue";






const props = defineProps({
    Cproducts: Object,
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});


</script>

<template>
    <frontend>
      <cart_comp :cartProducts="props.Cproducts"/>
    </frontend>

</template>



