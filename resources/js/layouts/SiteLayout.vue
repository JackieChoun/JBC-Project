<script setup>
import Footer from '@/layouts/components/Footer.vue';
import NavBar from '@/layouts/components/NavBar.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head :title="$page.props.title" />
    <NavBar />
    <header>
        <slot name="header" />
    </header>
    <main>
        <slot />
    </main>
    <Footer v-if="route().current() != 'contact'" />
</template>
