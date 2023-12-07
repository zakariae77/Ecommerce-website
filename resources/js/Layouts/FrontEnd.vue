<script setup>
import navbar_comp from '../Components/Main/Navbar.vue';
import footer_comp from '../Components/Main/Footer.vue';

</script>
<template>

    <navbar_comp/>
    <main class="min-h-screen">
        <slot/>
    </main>
    <footer_comp/>
</template>
