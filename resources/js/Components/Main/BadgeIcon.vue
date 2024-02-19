<script setup>
import { ref, watch, onMounted } from 'vue';
import { useStore } from 'vuex';

const store = useStore();
let basketCount = ref(null);

// Watch for changes in the store state
watch(() => store.state.basketCount, (newBasketCount) => {
  basketCount.value = newBasketCount;
  console.log('Updated basket count:', basketCount.value);
});

onMounted(() => {
  // Initialize basketCount with the initial value from the Vuex store
  basketCount.value = store.state.basketCount;
  console.log('Initial basket count:', basketCount.value);
});
</script>

<template>
    <div class="relative">
  <div class=" text-amber-700 rounded-full text-center absolute -top-3 left-9 ">
    {{ basketCount }}
  </div>
</div>
</template>
