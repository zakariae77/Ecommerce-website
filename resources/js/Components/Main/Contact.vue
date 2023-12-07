<script setup>

</script>
<template>
    <section>
        <div class="my-20 container mx-auto px-5 flex flex-col items-center justify-between  text-center md:flex-row md:text-left md:px-8 xl:px-44">

            <div class=" flex flex-col space-y-14 md:w-1/2">
                <h2 class=" text-3xl font-bold md:text-4xl">Contact With Us</h2>
                <p class=" text-gray-500">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <form action="" method="post" class=" w-full space-y-6 text-gray-500">
                        <div class="">
                            <input type="text" class=" w-full border-0 border-b-slate-200 border-b-[1px]" id="name" name="name" placeholder="Name*" required="required" data-error="name is required.">
                            <div class=""></div>
                        </div>
                        <div class="">
                            <input type="email" class=" w-full border-0 border-b-slate-200 border-b-[1px]" id="email" name="email" placeholder="Email*" required="required" data-error="valid email is required.">
                            <div class=""></div>
                        </div>
                        <div class="">
                            <textarea class=" w-full border-0 border-b-slate-200 border-b-[1px]" id="message" name="message" rows="10" placeholder="Write Your Message*" required="required" data-error="Please, leave us a message."></textarea>
                            <div class=""></div>
                        </div>
                        <div class=" text-left">
                            <button class=" bg-orange-600  text-white text-lg py-3 px-7 rounded-md font-bold " type="submit">Submit</button>
                            <div class=""></div>
                        </div>

                </form>
            </div>

            <div class="mt-10 md:px-8">
                <img src="images/watch-10.png" class=" floating w-60 md:w-96" alt>
            </div>

        </div>
    </section>
</template>
