<script setup>
import { Head, Link } from "@inertiajs/vue3";
import frontend from "../Layouts/FrontEnd.vue";
import hero_comp from "../Components/Main/Hero.vue";
import features_comp from "../Components/Main/Features.vue";
import about_comp from "../Components/Main/About.vue";
import video_comp from "../Components/Main/Video.vue"
import testimonial_comp from "../Components/Main/Testimonial.vue";
import contact_comp from "../Components/Main/Contact.vue";
import whyus_comp from "../Components/Main/Whyus.vue";
import productarea_comp from "../Components/Main/Productarea.vue";
import Newsletter_comp from "../Components/Main/Newsletter.vue";
import faq_comp from "../Components/Main/FAQ.vue";

import { onMounted } from "vue";





const props = defineProps({
    products: Object,
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
        <hero_comp/>
        <features_comp/>
        <about_comp/>
        <video_comp/>
        <whyus_comp/>
        <productarea_comp :products="props.products"  />
        <newsletter_comp/>
        <faq_comp/>
        <testimonial_comp/>
        <contact_comp/>
    </frontend>

</template>



