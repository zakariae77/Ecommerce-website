
<script setup>
import { ref } from "vue";

const modal = ref(null);

const modalOn = ()=>{
    modal.value.showModal();
}

const modalOff = (e)=>{
    let modalDimension = modal.value.getBoundingClientRect();
    if(
        e.clientX < modalDimension.left ||
        e.clientX > modalDimension.right ||
        e.clientY < modalDimension.top ||
        e.clientY > modalDimension.bottom
        ){
            modal.value.close();
        }
}

</script>

<template>
    <section class=" overflow-x-hidden bg-gradient-to-bl from-sky-500 to-purple-600 text-white">
        <div class="container px-4 py-36 mx-auto flex flex-col justify-between md:flex-row md:py-44 md:px-8 xl:px-44">
            <dialog ref="modal" @click="modalOff" class=" w-full h-[35vh] p-1 rounded-md md:w-1/2 md:h-1/2">
                <iframe class=" w-full h-full "  src="https://www.youtube.com/embed/re2uQJuxTEo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </dialog>
            <!--start video content-->
            <div class=" md:w-1/2">
                <h2 class=" mb-5 text-3xl font-bold md:text-4xl">Best Product For You. Check The Demo Video.</h2>
                <p class=" pb-5"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                    Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                </p>
                <p class=" pb-6">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                    pellentesque felis.</p>
            </div>
            <!--end video content-->
            <div class="  relative mt-28 py-28 flex items-center justify-center md:mt-0 md:w-1/2 ">
                <div class="w-[12em] h-[12rem]  border-[10px] absolute rounded-full"></div>
                <div class="w-[18rem] h-[18rem]  border-[10px] absolute rounded-full"></div>
                <div class="w-[23rem] h-[23rem]  border-[2px] border-dashed  absolute rounded-full"></div>
                <div class=" pop_circle w-[7rem] h-[7rem] top-[130px] left-[250px] md:left-[300px] border-red-600  border-[2px] absolute rounded-full"></div>
                <div class="pop_circle w-[7rem] h-[7rem] top-[73px] left-[180px] md;left-[216px] border-red-600  border-[2px] absolute rounded-full"></div>

                <div class="  w-6 h-6 -top-[2rem] left-[18rem] md:top-[16rem]  md:left-[310px] rounded-full absolute bg-white"></div>
                <div class="  w-6 h-6 top-[14rem] left-[14rem] md:top-2 md:left-[360px] absolute bg-white rounded-full"></div>

                <button  @click="modalOn"  class="absolute md:top-[5rem] md:left-[14rem]" >
                    <i class=" text-red-700  bg-white rounded-full text-8xl  fa-solid fa-circle-play"></i>
                </button>
            </div>
        </div>
    </section>
</template>


<style>
.pop_circle{
    animation: pop 1s ease-out infinite ;
}

@keyframes pop {
    100%{
        scale: 1.5;
        opacity: 0;
    }

}

</style>
