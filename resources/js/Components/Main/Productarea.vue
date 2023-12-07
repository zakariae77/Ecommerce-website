<script setup>

import addToCartBtn from "./AddToCartButton.vue";
import { onMounted } from "vue";


const props = defineProps({
    products: Object
})

</script>

<template>
    <section>
        <div class="container mx-auto p-4 py-20 md:px-8 xl:px-44">
            <div class=" text-center md:ml-[25%] md:w-1/2">
                <h2 class=" text-3xl font-bold py-4 md:text-4xl ">Our Awesome Products</h2>
                <p class=" text-gray-600 pb-5">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit
                    amet orci. Aenean dignissim pellentesque felis.</p>
            </div>
            <div class="w-full my-14 flex-wrap flex flex-col justify-center items-center gap-3 md:flex-row">
                <!--start product single-->

                <div v-for="product in products" :key="product.id"
                    class=" rounded-md bg-rose-100 w-full flex flex-col items-center p-10  md:flex-row md:justify-evenly  md:w-[49%]">
                    <div class=" w-7/12 md:w-4/12 md:pr-5">
                        <img class="" :src="`images/${product.image_name}`" alt="Image">
                    </div>
                    <div class=" flex flex-col items-center space-y-5">
                        <h4 class=" text-2xl font-bold pt-4"> {{ product.name }}</h4>
                        <ul v-html="product.description" class=" text-sm space-y-2">

                        </ul>
                        <h3 class=" text-2xl font-bold">${{ product.sale_price }}<del
                                class=" text-gray-600 font-normal"><sup>${{ product.price }}</sup></del>
                        </h3>
                        <addToCartBtn :product="product" />
                    </div>
                </div>

                <!--end product single-->
            </div>
            <div class=" text-center text-white font-bold">
                <a class=" bg-orange-600 py-4 px-6 rounded-md" href>More Product</a>
            </div>
        </div>
    </section>
</template>


<style></style>
