<script setup>
import { Sheet, SheetContent, SheetDescription, SheetHeader, SheetTitle, SheetTrigger } from '@/components/ui/sheet';

import { Link } from '@inertiajs/vue3';
import { Menu } from 'lucide-vue-next';

const isActive = (name) => route().current(name);
</script>
<template>
    <nav class="sticky top-0 z-50 w-full bg-gradient-to-r from-sky-950 to-sky-800">
        <div class="container flex h-full items-center justify-between text-white">
            <div>
                <Link :href="route('home')"><img src="/images/logo-white.svg" alt="logo" /></Link>
            </div>
            <Sheet>
                <SheetTrigger class="lg:hidden"><Menu class="size-12" /></SheetTrigger>
                <SheetContent>
                    <SheetHeader>
                        <SheetTitle>Menu</SheetTitle>
                        <SheetDescription class="flex flex-col space-y-10 py-5 text-center text-xl text-black">
                            <Link :href="route('home')" :class="{ 'underline underline-offset-10': isActive('home') }"> Accueil </Link>
                            <Link :href="route('prestation')" :class="{ 'underline underline-offset-10': isActive('prestation') }">
                                Prestations
                            </Link>
                            <Link :href="route('realisation')" :class="{ 'underline underline-offset-10': isActive('realisation') }">
                                Réalisations
                            </Link>
                            <Link :href="route('contact')" :class="{ 'underline underline-offset-10': isActive('contact') }"> Contact </Link>
                            <Link :href="route('client')" :class="{ 'underline underline-offset-10': isActive('client') }"> Espace client </Link>
                        </SheetDescription>
                    </SheetHeader>
                </SheetContent>
            </Sheet>

            <ul class="hidden text-sm uppercase lg:flex lg:space-x-7">
                <li class="hover:text-sky-200">
                    <Link :href="route('home')" :class="{ 'underline underline-offset-10': isActive('home') }">Accueil</Link>
                </li>
                <li class="hover:text-sky-200">
                    <Link :href="route('prestation')" :class="{ 'underline underline-offset-10': isActive('prestation') }">Prestations</Link>
                </li>
                <li class="hover:text-sky-200">
                    <Link :href="route('realisation')" :class="{ 'underline underline-offset-10': isActive('realisation') }">Réalisations</Link>
                </li>
                <li class="hover:text-sky-200">
                    <Link :href="route('contact')" :class="{ 'underline underline-offset-10': isActive('contact') }">Contact</Link>
                </li>
                <li class="hover:text-sky-200">
                    <Link :href="route('client')" :class="{ 'underline underline-offset-10': isActive('client') }">Espace client</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<style scoped>
nav {
    height: var(--navbar-height);
}
</style>
