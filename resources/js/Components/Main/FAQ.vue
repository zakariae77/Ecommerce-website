<script setup>
import { onMounted, ref } from "vue";
let checkboxes = null;


onMounted(() => {
    checkboxes = document.querySelectorAll("input[type=checkbox]");

    checkboxes.forEach(function (element) {
        element.addEventListener("change", (event) => {
            if (!event.target.checked) {
                return;
            } else {
                checkboxes.forEach((el) => {
                    if (event.target != el) {
                        el.checked = false;
                    }

                });
            }

        });
    });


});
</script>
<template>
    <section>
        <div class="container mx-auto p-4 py-20 flex flex-col items-center md:px-8 xl:px-44">
            <div class=" text-center md:w-5/6">
                <h2 class=" text-3xl font-bold pb-4 md:text-4xl">Frequently Asked Questions</h2>
                <p class=" px-2 pb-10 lg:pb-20">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit
                    amet orci. Aenean dignissim pellentesque felis.</p>
            </div>
            <!--start faq accordian-->
            <div class=" flex flex-col gap-3 md:grid md:grid-cols-2">
                <div class=" space-y-3">
                    <!--start faq single-->
                    <div class="rounded-md bg-slate-100 relative p-3 w-full">
                        <label for="q1" class="z-10  p-2 pt-4 rounded-md top-0 left-0 w-full cursor-pointer absolute hover:text-orange-600 hover:font-bold hover:left-2">
                            How can I buy the watch?

                        </label>
                        <input class=" peer  rounded-full absolute hidden" type="checkbox" name="" id="q1">

                        <i class=" peer-checked:hidden absolute right-3 font-bold text-xl fa-solid fa-plus"></i>
                        <i class=" absolute right-3 font-bold text-xl fa-solid fa-minus"></i>

                        <div class="h-0  overflow-hidden duration-200  ease-out pl-3 mt-10 border-l-4 peer-checked:h-36">
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales
                                leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</div>
                        </div>
                    </div>
                    <!--end faq single-->
                    <!--start faq single-->

                    <div class="rounded-md bg-slate-100 relative p-3 w-full">
                        <label for="q2" class="z-10  p-2 pt-4 rounded-md top-0 left-0 w-full cursor-pointer absolute hover:text-orange-600 hover:font-bold hover:left-2">How can I order the watch?</label>
                        <input class=" peer  rounded-full absolute hidden" type="checkbox" name="" id="q2">
                        <i class=" peer-checked:hidden absolute right-3 font-bold text-xl fa-solid fa-plus"></i>
                        <i class=" absolute right-3 font-bold text-xl fa-solid fa-minus"></i>

                        <div class="h-0 overflow-hidden duration-200  ease-out pl-3 mt-10 border-l-4 peer-checked:h-36">
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales
                                leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</div>
                        </div>
                    </div>
                    <!--end faq single-->
                    <!--start faq single-->

                    <div class="rounded-md bg-slate-100 relative p-3 w-full">
                        <label for="q3" class="z-10  p-2 pt-4 rounded-md top-0 left-0 w-full cursor-pointer absolute hover:text-orange-600 hover:font-bold hover:left-2">How much price of the watch?</label>
                        <input class=" peer  rounded-full absolute hidden" type="checkbox" name="" id="q3">
                        <i class=" peer-checked:hidden absolute right-3 font-bold text-xl fa-solid fa-plus"></i>
                        <i class=" absolute right-3 font-bold text-xl fa-solid fa-minus"></i>

                        <div class="h-0 overflow-hidden duration-200  ease-out pl-3 mt-10 border-l-4 peer-checked:h-36">
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales
                                leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</div>
                        </div>
                    </div>
                    <!--end faq single-->
                    <!--start faq single-->

                    <div class="rounded-md bg-slate-100 relative p-3 w-full">
                        <label for="q4" class="z-10  p-2 pt-4 rounded-md top-0 left-0 w-full cursor-pointer absolute hover:text-orange-600 hover:font-bold hover:left-2">How can I get refund?</label>
                        <input class=" peer  rounded-full absolute hidden" type="checkbox" name="" id="q4">
                        <i class=" peer-checked:hidden absolute right-3 font-bold text-xl fa-solid fa-plus"></i>
                        <i class=" absolute right-3 font-bold text-xl fa-solid fa-minus"></i>

                        <div class="h-0 overflow-hidden duration-200  ease-out pl-3 mt-10 border-l-4 peer-checked:h-36">
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales
                                leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</div>
                        </div>
                    </div>
                    <!--end faq single-->
                </div>

                <div class=" space-y-3">
                    <!--start faq single-->

                    <div class="rounded-md bg-slate-100 relative p-3 w-full">
                        <label for="q5" class="z-10  p-2 pt-4 rounded-md top-0 left-0 w-full cursor-pointer absolute hover:text-orange-600 hover:font-bold hover:left-2">How can I order the watch?</label>
                        <input class=" peer  rounded-full absolute hidden" type="checkbox" name="" id="q5">
                        <i class=" peer-checked:hidden absolute right-3 font-bold text-xl fa-solid fa-plus"></i>
                        <i class=" absolute right-3 font-bold text-xl fa-solid fa-minus"></i>

                        <div class="h-0 overflow-hidden duration-200  ease-out pl-3 mt-10 border-l-4 peer-checked:h-36">
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales
                                leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</div>
                        </div>
                    </div>
                    <!--end faq single-->
                    <!--start faq single-->
                    <div class="rounded-md bg-slate-100 relative p-3 w-full">
                        <label for="q6" class="z-10  p-2 pt-4 rounded-md top-0 left-0 w-full cursor-pointer absolute hover:text-orange-600 hover:font-bold hover:left-2">How can I get refund?</label>
                        <input class=" peer  rounded-full absolute hidden" type="checkbox" name="" id="q6">
                        <i class=" peer-checked:hidden absolute right-3 font-bold text-xl fa-solid fa-plus"></i>
                        <i class=" absolute right-3 font-bold text-xl fa-solid fa-minus"></i>

                        <div class="h-0 overflow-hidden duration-200  ease-out pl-3 mt-10 border-l-4 peer-checked:h-36">
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales
                                leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</div>
                        </div>
                    </div>
                    <!--end faq single-->
                    <!--start faq single-->
                    <div class="rounded-md bg-slate-100 relative p-3 w-full">
                        <label for="q7" class="z-10  p-2 pt-4 rounded-md top-0 left-0 w-full cursor-pointer absolute hover:text-orange-600 hover:font-bold hover:left-2">How can I get refund?</label>
                        <input class=" peer  rounded-full absolute hidden" type="checkbox" name="" id="q7">
                        <i class=" peer-checked:hidden absolute right-3 font-bold text-xl fa-solid fa-plus"></i>
                        <i class=" absolute right-3 font-bold text-xl fa-solid fa-minus"></i>

                        <div class="h-0 overflow-hidden duration-200  ease-out pl-3 mt-10 border-l-4 peer-checked:h-36">
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales
                                leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</div>
                        </div>
                    </div>
                    <!--end faq single-->
                    <!--start faq single-->

                    <div class="rounded-md bg-slate-100 relative p-3 w-full">
                        <label for="q8" class="z-10  p-2 pt-4 rounded-md top-0 left-0 w-full cursor-pointer absolute hover:text-orange-600 hover:font-bold hover:left-2">How much price of the watch?</label>
                        <input class=" peer  rounded-full absolute hidden" type="checkbox" name="" id="q8">
                        <i class=" peer-checked:hidden absolute right-3 font-bold text-xl fa-solid fa-plus"></i>
                        <i class=" absolute right-3 font-bold text-xl fa-solid fa-minus"></i>

                        <div class="h-0 overflow-hidden duration-200  ease-out pl-3 mt-10 border-l-4 peer-checked:h-36">
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales
                                leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</div>
                        </div>
                    </div>
                    <!--end faq single-->
                </div>
                <!--end faq accordian-->
            </div>
        </div>
    </section>
</template>

<style></style>
