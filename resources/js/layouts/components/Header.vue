<script setup>
import { Check } from 'lucide-vue-next';
</script>

<template>
    <div id="header">
        <section class="h-1/2 bg-gradient-to-r from-sky-950 to-sky-800 text-white">
            <div class="container h-full grid-cols-2 lg:grid">
                <div class="flex h-full justify-center pt-25 lg:justify-start">
                    <h1 class="text-center text-2xl font-bold lg:text-start lg:text-4xl">
                        Création et maintenance <br />
                        de votre site internet
                    </h1>
                </div>
                <div class="flex items-center justify-center lg:items-start lg:justify-end lg:pt-17">
                    <img src="images/Slider.png" alt="slider" class="absolute z-40" />
                </div>
            </div>
        </section>

        <section class="container h-1/2 text-xl">
            <ul class="mt-35 space-y-2 lg:mt-20">
                <li class="flex items-center"><Check class="mr-3 text-green-600" />Site vitrine et e-commerce</li>
                <li class="flex items-center"><Check class="mr-3 text-green-600" />Site sur-mesure</li>
                <li class="flex items-center"><Check class="mr-3 text-green-600" />Hébergement et maintenance</li>
                <li class="flex items-center"><Check class="mr-3 text-green-600" />Référencement</li>
            </ul>
        </section>
    </div>
</template>

<style scoped>
/* section:first-child {
    height: calc(50% - 50px);
}
section:last-child {
    height: calc(50% + 50px);
} */
#header {
    height: calc(100vh - 2 * var(--navbar-height));
    margin-bottom: var(--navbar-height);
}
</style>
