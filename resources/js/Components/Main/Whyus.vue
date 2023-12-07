<script setup>
import { onMounted, ref } from "vue";

const slider = ref(null);
let current = 0;

const next = () => {
    current++;
    carousel();

}
const pre = () => {
    current--;
    carousel();
}

function carousel() {

    slider.value.childNodes.forEach(function (slide, index) {

        if(current == slider.value.childNodes.length )current=0 ;
        if(current < 0 )current= slider.value.childNodes.length-1 ;
        if(index == current){
            slide.style = "opacity:1;";
        }else{
            slide.style = "opacity: 0;";
        }

    });

}

setInterval(next, 4500);



</script>


<template>
    <section class="">
        <div class="container mx-auto px-4 py-20 md:px-8 xl:px-44">
            <div class="text-center  pb-16 md:w-1/2 md:ml-[25%]">
                <h2 class=" text-4xl font-bold py-4">Why Choose The Product</h2>
                <p class=" text-gray-700">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet
                    orci. Aenean
                    dignissim pellentesque felis.</p>
            </div>

            <div class=" flex flex-col justify-between items-center md:flex-row md:space-x-14">
                <!--start product gallery-->
                <div class=" w-full md:w-[40%] p-5 mb-16 rounded-md h-[30rem] bg-amber-100 ">
                    <div ref="slider" class=" relative overflow-hidden flex justify-center items-center w-full h-full">
                        <img class="transition-all duration-1000 ease-in-out w-full  absolute md:w-3/4" src="images/watch-14.png" alt>
                        <img class="transition-all duration-1000 ease-in-out w-full  absolute md:w-3/4" src="images/watch-15.png" alt>
                        <img class="transition-all duration-1000 ease-in-out w-full  absolute md:w-3/4" src="images/watch-12.png" alt>


                    </div>
                    <div class=" -translate-y-8 flex justify-evenly items-end">
                        <i @click="pre" class=" text-4xl z-10 fa-solid fa-circle-chevron-left hover:scale-125 hover:text-amber-500"></i>
                        <i @click="next" class=" text-4xl z-10 fa-solid fa-circle-chevron-right hover:scale-125 hover:text-amber-500"></i>
                    </div>
                </div>
                <!--end product gallery-->
                <!--start why choose content-->
                <div
                    class=" flex flex-col space-y-7 md:space-y-0 gap-10 text-center md:w-[60%]  md:flex-row md:flex-wrap md:text-left">

                    <div class=" flex flex-col items-center  md:items-start md:w-2/5">
                        <div class=" rounded-full p-2 bg-[#ff4d1c1a]">
                            <svg class="svg-icons rounded-full p-3 fill-red-500 w-20 bg-[#ff4d1c1a]" viewBox="0 0 20 20">
                                <path
                                    d="M16.888,8.614c0.008-0.117,0.018-0.233,0.018-0.352c0-2.851-2.311-5.161-5.16-5.161c-1.984,0-3.705,1.121-4.568,2.763c-0.32-0.116-0.664-0.182-1.023-0.182c-1.663,0-3.011,1.348-3.011,3.01c0,0.217,0.024,0.427,0.067,0.631c-1.537,0.513-2.647,1.96-2.647,3.67c0,2.138,1.733,3.87,3.871,3.87h10.752c2.374,0,4.301-1.925,4.301-4.301C19.486,10.792,18.416,9.273,16.888,8.614 M15.186,16.003H4.433c-1.66,0-3.01-1.351-3.01-3.01c0-1.298,0.827-2.444,2.06-2.854l0.729-0.243l-0.16-0.751C4.02,8.993,4.003,8.841,4.003,8.692c0-1.186,0.965-2.15,2.151-2.15c0.245,0,0.49,0.045,0.729,0.131l0.705,0.256l0.35-0.664c0.748-1.421,2.207-2.303,3.807-2.303c2.371,0,4.301,1.929,4.301,4.301c0,0.075-0.007,0.148-0.012,0.223l-0.005,0.073L15.99,9.163l0.557,0.241c1.263,0.545,2.079,1.785,2.079,3.159C18.626,14.46,17.082,16.003,15.186,16.003">
                                </path>
                            </svg>
                        </div>
                        <h4 class=" text-2xl font-bold my-3">High Quality</h4>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet</p>
                    </div>


                    <div class="flex flex-col items-center  md:items-start md:w-2/5  ">
                        <div class="rounded-full p-2 bg-[#ff4d1c1a]">
                            <svg class="svg-icon rounded-full p-3 fill-red-500 w-20 bg-[#ff4d1c1a]" viewBox="0 0 20 20">
                                <path
                                    d="M17.125,1.375H2.875c-0.828,0-1.5,0.672-1.5,1.5v11.25c0,0.828,0.672,1.5,1.5,1.5H7.75v2.25H6.625c-0.207,0-0.375,0.168-0.375,0.375s0.168,0.375,0.375,0.375h6.75c0.207,0,0.375-0.168,0.375-0.375s-0.168-0.375-0.375-0.375H12.25v-2.25h4.875c0.828,0,1.5-0.672,1.5-1.5V2.875C18.625,2.047,17.953,1.375,17.125,1.375z M11.5,17.875h-3v-2.25h3V17.875zM17.875,14.125c0,0.414-0.336,0.75-0.75,0.75H2.875c-0.414,0-0.75-0.336-0.75-0.75v-1.5h15.75V14.125z M17.875,11.875H2.125v-9c0-0.414,0.336-0.75,0.75-0.75h14.25c0.414,0,0.75,0.336,0.75,0.75V11.875z M10,14.125c0.207,0,0.375-0.168,0.375-0.375S10.207,13.375,10,13.375s-0.375,0.168-0.375,0.375S9.793,14.125,10,14.125z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold my-3">Awesome Design</h4>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet</p>
                    </div>

                    <div class="flex flex-col items-center  md:items-start md:w-2/5  ">
                        <div class="rounded-full p-2 bg-[#ff4d1c1a]">
                            <svg class="svg-icon rounded-full p-3 fill-red-500 w-20 bg-[#ff4d1c1a]" viewBox="0 0 20 20">
                                <path
                                    d="M18.21,16.157v-8.21c0-0.756-0.613-1.368-1.368-1.368h-1.368v1.368v1.368v6.841l-1.368,3.421h5.473L18.21,16.157z">
                                </path>
                                <path
                                    d="M4.527,9.316V7.948V6.579H3.159c-0.756,0-1.368,0.613-1.368,1.368v8.21l-1.368,3.421h5.473l-1.368-3.421V9.316z">
                                </path>
                                <path
                                    d="M14.766,5.895h0.023V5.21c0-2.644-2.145-4.788-4.789-4.788S5.211,2.566,5.211,5.21v0.685h0.023H14.766zM12.737,3.843c0.378,0,0.684,0.307,0.684,0.684s-0.306,0.684-0.684,0.684c-0.378,0-0.684-0.307-0.684-0.684S12.358,3.843,12.737,3.843z M10,1.448c0.755,0,1.368,0.613,1.368,1.368S10.755,4.185,10,4.185c-0.756,0-1.368-0.613-1.368-1.368S9.244,1.448,10,1.448z">
                                </path>
                                <path
                                    d="M14.789,6.579H5.211v9.578l1.368,1.368h6.841l1.368-1.368V6.579z M12.052,12.052H7.948c-0.378,0-0.684-0.306-0.684-0.684c0-0.378,0.306-0.684,0.684-0.684h4.105c0.378,0,0.684,0.306,0.684,0.684C12.737,11.746,12.431,12.052,12.052,12.052z M12.052,9.316H7.948c-0.378,0-0.684-0.307-0.684-0.684s0.306-0.684,0.684-0.684h4.105c0.378,0,0.684,0.307,0.684,0.684S12.431,9.316,12.052,9.316z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold my-3">Latest Technology</h4>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet</p>
                    </div>

                    <div class="flex flex-col items-center  md:items-start md:w-2/5  ">
                        <div class="rounded-full p-2 bg-[#ff4d1c1a]">
                            <svg class="svg-icon rounded-full p-3 fill-red-500 w-20 bg-[#ff4d1c1a]" viewBox="0 0 20 20">
                                <path
                                    d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold my-3">User Friendly</h4>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet</p>
                    </div>
                </div>
                <!--end why choose content-->
            </div>
        </div>
    </section>
</template>





<style>
</style>
