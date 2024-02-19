<script setup>
import { ref, onMounted } from 'vue';

const shipping = ref("default");
const subTotal = ref(null);
const props = defineProps({
    cartProducts: Object
})


function format(price){
  return "Є "+ parseFloat(price).toFixed(2);
}

props.cartProducts.forEach((element)=>{
    subTotal.value += element.price;
});
</script>

<template>

  <div class="mb-20 container px-4 py-20 mx-auto md:px-8 xl:px-44">
    <div class="flex shadow-md my-10">
      <div class="w-3/4 bg-white px-10 py-10">
        <!-- head -->
        <div class="flex justify-between border-b pb-8">
          <h1 class="font-semibold text-2xl">Shopping Cart</h1>
          <h2 class="font-semibold text-2xl">{{ cartProducts.length }} Items</h2>
        </div>
        <!-- head -->
        <div class="flex mt-10 mb-5">
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
        </div>
        <!-- head -->

        <div v-for="(cProduct, index) in cartProducts" :key="index" class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
          <!-- product -->
          <div  class="flex w-2/5">
            <div class="w-20">
              <img class="h-24" :src="'/images/'+cProduct.product.image_name" alt="">
            </div>
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <span class="font-bold text-sm"> {{ cProduct.product.name }}</span>
              <!---<span class="text-red-500 text-xs">Apple</span> -->
              <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
            </div>
          </div>
          <div class="flex justify-center w-1/5">
            <div class="mx-2 border text-center w-10" >{{ cProduct.qty }}</div>
          </div>
          <span class="text-center w-1/5 font-semibold text-sm">{{ format(cProduct.product.sale_price) }}</span>
          <span class="text-center w-1/5 font-semibold text-sm">{{ format(cProduct.price) }}</span>
        </div>
        <!-- end product -->
      </div>
<!-- side summary -->
      <div id="summary" class="w-1/4 px-8 py-10">
        <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
        <div class="flex justify-between mt-10 mb-5">
          <span class="font-semibold text-sm uppercase">{{ cartProducts.length }} Items</span>
          <span class="font-semibold text-sm"> {{ format(subTotal) }}</span>
        </div>
        <div>
          <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
          <select v-model="shipping" class="block p-2 text-gray-600 w-full text-sm">
            <option value="default">Select shipping</option>
            <option value="0">Standard shipping - Є0.00</option>
            <option value="10">Standard shipping - Є10.00</option>
          </select>
        </div>


        <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>Total cost</span>
            <span v-if="format(subTotal + parseFloat(shipping))!= 'Є NaN'"> {{ format(subTotal + parseFloat(shipping)) }}</span>
          </div>
          <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
        </div>
      </div>

    </div>
 </div>
</template>


