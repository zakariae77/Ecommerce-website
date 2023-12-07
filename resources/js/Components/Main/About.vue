<script setup>
import { onMounted } from 'vue';

function orb( targetClass , numberOfKeyframes, radius){
    const Orb = document.querySelector("."+targetClass);
    const animationName = "rotate-dynamic";


    let keyframesCode = `@keyframes ${targetClass} {`;
    for (let i = 0; i <= numberOfKeyframes; i++) {

        const percentage = i * 100 / numberOfKeyframes;
        const currentTranslateX = radius * Math.cos((i / numberOfKeyframes) * 2 * Math.PI);
        const currentTranslateY = radius * Math.sin((i / numberOfKeyframes) * 2 * Math.PI);

        keyframesCode += `
          ${percentage}% {
            transform: translate(${currentTranslateX}px, ${currentTranslateY}px);
          }
        `;
    }
    keyframesCode += "}";
    const style = document.createElement("style");
    style.textContent =  keyframesCode;
    document.head.appendChild(style);




}

onMounted(()=>{
    orb("circle_1",100, 192);
    orb("circle_2",100, 160);
    orb("circle_2_2",100, 160);
    orb("circle_3",100, 144);
    orb("circle_4",100, 128);
    orb("circle_5",100, 192);
});
</script>

<template>
     <section class=" bg-slate-100 mt-28">
        <div class="overflow-x-hidden container mx-auto px-4 py-28 flex flex-col items-center  space-y-8 md:space-y-0 md:flex-row lg:justify-end md:px-8 xl:px-44" >

                <!--start about image-->
                <div class=" flex justify-center items-center lg:mr-16">
                    <div class="w-[14rem] h-[14rem] border-slate-400 border absolute rounded-full "></div>
                    <div class="w-[16rem] h-[16rem] border-slate-400 border absolute rounded-full "></div>
                    <div class="w-[18rem] h-[18rem] border-slate-400 border absolute rounded-full "></div>
                    <div class="w-80 h-80 border-slate-400 border absolute rounded-full "></div>
                    <div class="w-[24rem] h-[24rem] border-slate-400 border absolute rounded-full "></div>

                    <div class=" circle_1 w-4 h-4 rounded-full absolute bg-yellow-500"></div>
                    <div class=" circle_2 w-3 h-3 rounded-full absolute bg-rose-700"></div>
                    <div class=" circle_2_2 w-3 h-3 rounded-full absolute bg-rose-600"></div>
                    <div class=" circle_3 w-4 h-4 rounded-full absolute bg-sky-900"></div>
                    <div class=" circle_4 w-3 h-3 rounded-full absolute bg-neutral-800"></div>
                    <div class=" circle_5 w-6 h-6 rounded-full absolute bg-sky-700"></div>
                    <div class=" circle_5_2 w-2 h-2 rounded-full absolute bg-green-500"></div>

                    <img src="images/watch-8.png" class="floating md:pr-12 h-[24rem] md:h-[28rem]  " alt="Image">
                </div>

                <!--start about info-->
                <div class=" md:w-1/2 bg-white rounded-lg px-5 py-16 shadow-slate-500 space-y-6   md:shadow-lg">
                    <h2 class=" text-4xl font-bold ">About The Product</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, neque ipsam repudiandae nam ratione voluptates!</p>
                    <ul class=" space-y-5 text-sm font-bold">
                        <li> &#9745; Model No #240 Blackmart</li>
                        <li> &#9745; Camera Resulation 24 Mega Pixel</li>
                        <li> &#9745; Image Processor DIGIC 7</li>
                        <li> &#9745; Effective Pixels Approx. 24.20 megapixels</li>
                        <li> &#9745; Aspect Ratio 3:2</li>
                        <li> &#9745; Lens Mount EF/EF-S</li>
                        <li> &#9745; Focal Length Equivalent to 1.6x</li>
                    </ul>
                </div>
        </div>
    </section>
</template>
<style>
/*Orb rotation*/
.circle_1{
    animation: circle_1 25s ease-out infinite;
}
.circle_2{
    animation: circle_2 10s ease-out infinite;
}
.circle_2_2{
    animation: circle_2 13s ease-out infinite;
}
.circle_3{
    animation: circle_3 9s ease-out infinite;
}
.circle_4{
    animation: circle_4 5s ease-out infinite;
}
.circle_5{
    animation: circle_5 4s ease-out infinite;
}
.circle_5_2{
    animation: circle_5 18s ease-out infinite;
}
</style>
