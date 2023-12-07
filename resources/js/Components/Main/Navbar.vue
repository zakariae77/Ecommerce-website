<script setup>
import { ref } from "vue";

let open =ref(null);

function MenueToggle(){
    open.value = !open.value;
    console.log(open.value);
}
</script>

<template>
    <section class=" sticky top-0 z-50">
        <div class=" relative bg-white shadow-lg container mx-auto px-8 py-6 flex items-center justify-between xl:px-48">
            <!-- Logo -->
            <a  class="" href="#"><img class=" h-9" src="images/logo.png" alt="logo"></a>
            <!--Hamburger menu-->
            <div @click="MenueToggle"
                 class="h-7 w-8  relative md:hidden">
                <span  :class="[open ? 'hamburger' : '' ]" class="absolute h-1 transition-all duration-300 ease-out w-7 rounded-full top-0 right-1 bg-red-500"></span>
                <span  :class="[open ? 'hamburger' : '' ]" class="absolute h-1 transition-all duration-300 ease-out w-7 rounded-full top-3 right-1 bg-green-500"></span>
                <span  :class="[open ? 'hamburgerLast' : '' ]" class=" absolute h-1 transition-all duration-300 ease-out w-7 rounded-full top-6 right-1 bg-blue-500 "></span>
            </div>
            <!-- navbar links -->
            <div :class="[open ? 'menuOpened' : '' ]"
                class=" menuClosed overflow-y-hidden top-full left-0 p-5  w-full bg-slate-200 absolute text-slate-600 text-lg  md:hidden">

                <div class="flex flex-col space-y-3 border p-5 pl-10   border-slate-300 bg-white">
                    <a class="hover:pl-1 hover:font-bold hover:text-slate-800 " href="#">Home</a>

                    <a class="hover:pl-1 hover:font-bold hover:text-slate-800" href="#">Features</a>

                    <a class="hover:pl-1 hover:font-bold hover:text-slate-800" href="#">About</a>

                    <a class="hover:pl-1 hover:font-bold hover:text-slate-800" href="#">Product</a>

                    <a class="hover:pl-1 hover:font-bold hover:text-slate-800" href="#">Faq</a>

                    <a class="hover:pl-1 hover:font-bold hover:text-slate-800" href="#">Testimonial</a>

                    <a class="hover:pl-1 hover:font-bold hover:text-slate-800" href="#">Contact</a>
                </div>

            </div>
            <!-- navbar links -->
            <div class="hidden text-black  space-x-4 md:inline-flex" id="">

                <a class="" href="#">Home</a>

                <a class="" href="#">Features</a>

                <a class="" href="#">About</a>

                <a class="" href="#">Product</a>

                <a class="" href="#">Faq</a>

                <a class="" href="#">Testimonial</a>

                <a class=" " href="#">Contact</a>

            </div>


        </div>
    </section>
</template>


<style scoped>
.menuClosed{
    opacity: .4;
    height: 0px;
    transform: translateX(-100%);
    transition: .4s ease-out all;
}
.menuOpened{
    opacity: 1;
    height: 350px;
    transform: translateX(0);
}


.hamburger{
    transform-origin: center;
    top: .75rem;
    transform: rotate(45deg);
}
.hamburgerLast{
    transform-origin: center;
    top: .75rem;
    transform: rotate(-45deg);
}

</style>
