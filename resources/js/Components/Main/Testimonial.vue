<script setup>
import { onMounted, ref } from 'vue';

const carousel = ref(null);
const card = ref(null);
const carouseChildren = ref(null);
let cardPreview = ref(null);
let wrapper = ref(null);






let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;


const dragStart = (e) => {
    isDragging = true;
    carousel.value.classList.add("dragging");
    //position of the mouse at now
    startX = e.pageX;
    //position of slider now
    startScrollLeft = carousel.value.scrollLeft;
}
const dragging = (e) => {
    if (!isDragging) return;
    carousel.value.scrollLeft = startScrollLeft - (e.pageX - startX);

}
const dragEnd = () => {
    isDragging = false;
    carousel.value.classList.remove("dragging");
}

const btnLeft = () => {
    carousel.value.scrollLeft -= card.value.offsetWidth;
}
const btnRight = () => {
    carousel.value.scrollLeft += card.value.offsetWidth;
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.value.scrollLeft === 0) {
        carousel.value.classList.add("no-transition");
        carousel.value.scrollLeft = carousel.value.scrollWidth - (2 * carousel.value.offsetWidth) + card.value.offsetWidth;
        carousel.value.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.value.scrollLeft) === carousel.value.scrollWidth - carousel.value.offsetWidth) {
        carousel.value.classList.add("no-transition");
        carousel.value.scrollLeft = carousel.value.offsetWidth - card.value.offsetWidth;
        carousel.value.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.value.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.value.scrollLeft += card.value.offsetWidth, 2500);
}

autoPlay();
const clearT = ()=>{clearTimeout(timeoutId)};
onMounted(() => {
    carouseChildren.value = [...carousel.value.children];
    cardPreview = Math.round(carousel.value.offsetWidth / card.value.offsetWidth);

    carouseChildren.value.slice(-cardPreview.value).reverse().forEach(element => {
        carousel.value.insertAdjacentHTML("afterbegin", element.outerHTML);
    });
    carouseChildren.value.slice(0, cardPreview.value).forEach(element => {
        carousel.value.insertAdjacentHTML("beforeend", element.outerHTML);
    });
});



</script>
<template>
    <section class="overflow-x-hidden bg-slate-200">
        <div class="mb-20 container px-4 py-20 mx-auto md:px-8 xl:px-44">
            <div class=" text-center">
                <!--start section heading-->
                <h2 class=" text-3xl font-bold">Our Customer Feedback</h2>
                <p class=" text-slate-600 py-4">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit
                    amet orci. Aenean dignissim pellentesque felis.</p>

                <!--end section heading-->
            </div>
            <!--start testimonial carousel-->
            <div ref="wrapper" @mouseenter="clearT" @mouseleave="autoPlay" class="wrapper relative">
                <i @click="btnLeft" class="fa-solid fa-angle-left"></i>
                <div ref="carousel" @scroll="infiniteScroll" @mousemove="dragging" @mousedown="dragStart" @mouseup="dragEnd"
                    class="carousel text-center grid gap-4 grid-flow-col overflow-x-auto scroll-smooth snap-mandatory snap-x ">

                    <!--start testimonial single-->
                    <div ref="card" class="card flex flex-col items-center  bg-white rounded-lg px-5 py-16">
                        <div class=" flex flex-col items-center">
                            <div class=" w-24">
                                <img class=" w-full my-5 rounded-full" src="images/client-1.jpg" draggable="false" alt>
                            </div>
                            <div class="">
                                <h4 class="">Cole Thomas</h4>
                                <p class=" my-2">Affiliate Marketer</p>
                            </div>
                        </div>
                        <div class="text-slate-600 flex flex-col items-center">
                            <svg class=" my-2 text-6xl fill-slate-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                                <path
                                    d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                            </svg>
                            <p class="mb-4 flex justify-center space-x-1">
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>

                            </p>
                            <p class=" ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                                volutpat mattis eros. Nullam malesuada erat ut turpis.</p>

                        </div>
                    </div>
                    <!--end testimonial single-->
                    <!--start testimonial single-->
                    <div class="card flex flex-col items-center  bg-white rounded-lg px-5 py-16">
                        <div class=" flex flex-col items-center">
                            <div class=" w-24">
                                <img class=" w-full my-5 rounded-full" src="images/client-2.jpg" draggable="false" alt>
                            </div>
                            <div class="client-details">
                                <h4>Andrew Watt</h4>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                        <div class="text-slate-600 flex flex-col items-center">
                            <svg class=" my-2 text-6xl fill-slate-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                                <path
                                    d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                            </svg>
                            <p class="mb-4 flex justify-center space-x-1">
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>

                            </p>
                            <p class=" ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                                volutpat mattis eros. Nullam malesuada erat ut turpis.</p>

                        </div>
                    </div>
                    <!--end testimonial single-->
                    <!--start testimonial single-->
                    <div class="card flex flex-col items-center  bg-white rounded-lg px-5 py-16">
                        <div class=" flex flex-col items-center">
                            <div class=" w-24">
                                <img class=" w-full my-5 rounded-full" src="images/client-3.jpg" draggable="false" alt>
                            </div>
                            <div class="client-details">
                                <h4>Emma Dee</h4>
                                <p>App Developer</p>
                            </div>
                        </div>
                        <div class="text-slate-600 flex flex-col items-center">
                            <svg class=" my-2 text-6xl fill-slate-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                                <path
                                    d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                            </svg>
                            <p class="mb-4 flex justify-center space-x-1">
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>

                            </p>
                            <p class=" ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                                volutpat mattis eros. Nullam malesuada erat ut turpis.</p>

                        </div>
                    </div>
                    <!--end testimonial single-->
                    <!--start testimonial single-->
                    <div class="card flex flex-col items-center  bg-white rounded-lg px-5 py-16">
                        <div class=" flex flex-col items-center">
                            <div class=" w-24">
                                <img class=" w-full my-5 rounded-full" src="images/client-4.jpg" draggable="false" alt>
                            </div>
                            <div class="client-details">
                                <h4>Olivia Smith</h4>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="text-slate-600 flex flex-col items-center">
                            <svg class=" my-2 text-6xl fill-slate-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                                <path
                                    d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                            </svg>
                            <p class="mb-4 flex justify-center space-x-1">
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>

                            </p>
                            <p class=" ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                                volutpat mattis eros. Nullam malesuada erat ut turpis.</p>

                        </div>
                    </div>
                <!--end testimonial single-->
                <!--start testimonial single-->
                <div class="card flex flex-col items-center  bg-white rounded-lg px-5 py-16">
                    <div class=" flex flex-col items-center">
                        <div class=" w-24">
                            <img class=" w-full my-5 rounded-full" src="images/client-2.jpg" draggable="false" alt>
                        </div>
                        <div class="client-details">
                            <h4>Andrew Watt</h4>
                            <p>Graphic Designer</p>
                        </div>
                    </div>
                    <div class="text-slate-600 flex flex-col items-center">
                        <svg class=" my-2 text-6xl fill-slate-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 448 512">
                            <path
                                d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                        </svg>
                        <p class="mb-4 flex justify-center space-x-1">
                            <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg class=" fill-yellow-500" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>

                        </p>
                        <p class=" ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                            volutpat mattis eros. Nullam malesuada erat ut turpis.</p>

                    </div>
                </div>
                <!--end testimonial single-->
            </div>
            <i @click="btnRight" class="fa-solid fa-angle-right"></i>
        </div>
        <!--end testimonial carousel-->
    </div>
</section>

</template>

<style>/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

.wrapper i {
    top: 50%;
    height: 50px;
    width: 50px;
    cursor: pointer;
    font-size: 1.25rem;
    position: absolute;
    text-align: center;
    line-height: 50px;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
    transform: translateY(-50%);
    transition: transform 0.1s linear;
}

.wrapper i:active {
    transform: translateY(-50%) scale(0.85);
}

.wrapper i:first-child {
    left: -22px;
}

.wrapper i:last-child {
    right: -22px;
}

.carousel {
    grid-auto-columns: calc((100% / 3) - 12px);

}

.carousel::-webkit-scrollbar {
    display: none;
}

.carousel.no-transition {
    scroll-behavior: auto;
}

.carousel.dragging {
    scroll-snap-type: none;
    scroll-behavior: auto;
}

.carousel.dragging .card {
    cursor: grab;
    user-select: none;
}

.carousel .card {
    scroll-snap-align: start;
    cursor: pointer;
}

@media screen and (max-width: 900px) {
    .wrapper .carousel {
        grid-auto-columns: calc((100% / 2) - 9px);
    }
}

@media screen and (max-width: 600px) {
    .wrapper .carousel {
        grid-auto-columns: 100%;
    }
}


</style>
