<script setup>

</script>
<template>
  <section>
    <div class="hero mt-16 container mx-auto px-5 flex flex-col items-center justify-between  text-center md:flex-row md:text-left md:px-8 xl:px-44">
        <div class=" flex flex-col items-center  max-w-xl md:w-1/2 md:max-w-lg md:items-start">
            <h1 class="my-7 text-4xl font-bold capitalize md:text-5xl lg:text-7xl">Smart Digital Watch For Luxurious Life</h1>
            <p class="mb-12 text-gray-700 text-lg">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
            <a class=" w-fit bg-orange-600 text-white text-md font-bold p-3 px-6  rounded-sm hover:text-white hover:bg-orange-700" href="">Buy Products</a>
        </div>

        <div class=" mt-12 md:w-1/2 flex flex-col items-center justify-center">
            <div>
                <img class=" floating h-[24rem]" src="images/watch-7.png" alt="">
             </div>

            <span id="shadow" class=" mt-5 "></span>

        </div>
    </div>
  </section>
</template>

<style>
.floating{
    animation: float 3s ease-out infinite;
}

@keyframes float {
    50%{
        transform: translateY(60px);
    }
}

#shadow{
    width: 200px;
    height: 20px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    filter:blur(3px);
    animation: shrink 3s ease-out infinite;
}

@keyframes shrink {
    0%{ width : 50% }
    50%{ width : 30% }
    100%{ width : 50% }
}


</style>

