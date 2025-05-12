<script setup>
import Button from '@/components/custom/Button.vue';
</script>

<template>
    <section class="relative bg-gradient-to-r from-sky-950 to-sky-800 py-10 text-white lg:py-16">
        <div id="bg" class="container flex flex-col items-center">
            <h1 class="text-4xl font-semibold">
                <slot name="title" />
            </h1>
            <p class="py-7 text-center text-lg lg:text-start">
                <slot name="paragraphe" />
            </p>
            <Button :href="route('prestation')" color="green">Prendre rendez-vous</Button>
        </div>
    </section>
</template>

<style scoped>
#bg::before {
    background-image: url('/images/logo-white.svg');
    background-size: cover;
    background-position: center;
    position: absolute;
    z-index: 1;
    opacity: 0.02;
    content: '';
    inset: 0;
}
</style>
