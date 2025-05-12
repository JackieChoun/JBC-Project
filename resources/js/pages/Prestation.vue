<script setup>
import Button from '@/components/custom/Button.vue';
import SiteLayout from '@/layouts/SiteLayout.vue';
import { Check } from 'lucide-vue-next';
</script>

<template>
    <SiteLayout>
        <section class="container my-25 lg:flex">
            <div class="relative ml-9">
                <div class="absolute inset-0 -translate-x-9 -translate-y-9 bg-gradient-to-r from-sky-950 to-sky-800"></div>
                <img src="/images/AdobeStock.jpg" alt="image" class="relative" />
            </div>
            <div class="pt-20 lg:pl-20">
                <h1 class="pb-10 text-3xl font-bold lg:text-4xl">Prestations</h1>
                <p>Toutes nos offres de site internet inclus :</p>
                <ul class="space-y-5 pt-5">
                    <li class="flex items-center">
                        <Check class="mr-3 min-w-5 text-green-600" />Référencement naturel (SEO), optimisé pour les moteurs de recherche
                    </li>
                    <li class="flex items-center">
                        <Check class="mr-3 min-w-5 text-green-600" />Responsive, optimisé pour les smartphones et tablettes
                    </li>
                </ul>
            </div>
        </section>
        <section class="container grid-cols-3 space-y-10 gap-x-12 gap-y-30 lg:grid lg:space-y-0">
            <div class="justify-center lg:relative lg:flex">
                <img src="/images/Image.jpg" alt="image" />
                <div class="flex flex-col items-center bg-white lg:absolute lg:top-65 lg:border-b lg:border-black lg:px-10 lg:py-3">
                    <h2 class="text-xl font-medium">Site vitrine</h2>
                    <p class="py-3">Dès 990€ TTC</p>
                    <Button :href="route('prestation')" color="black">Commander</Button>
                </div>
            </div>
            <div class="justify-center lg:relative lg:flex">
                <img src="/images/Image2.jpg" alt="image" />
                <div class="flex flex-col items-center bg-white lg:absolute lg:top-65 lg:border-b lg:border-black lg:px-10 lg:py-3">
                    <h2 class="text-xl font-medium">Site e-commerce</h2>
                    <p class="py-3">Dès 2 990€ TTC</p>
                    <Button :href="route('prestation')" color="black">Commander</Button>
                </div>
            </div>
            <div class="justify-center lg:relative lg:flex">
                <img src="/images/Image3.jpg" alt="image" />
                <div class="flex flex-col items-center bg-white lg:absolute lg:top-65 lg:border-b lg:border-black lg:px-10 lg:py-3">
                    <h2 class="text-xl font-medium">Site sur-mesure</h2>
                    <p class="py-3">Sur devis</p>
                    <Button :href="route('prestation')" color="black">Commander</Button>
                </div>
            </div>
            <div class="col-span-2 justify-center lg:relative lg:flex">
                <img src="/images/Image4.jpg" alt="image" />
                <div class="flex flex-col items-center bg-white lg:absolute lg:top-65 lg:border-b lg:border-black lg:px-10 lg:py-3">
                    <h2 class="text-xl font-medium">Hébergement et maintenance</h2>
                    <p class="py-3">Site vitrine : 35€ TTC / mois | Site e-commerce : 45€ TTC / mois</p>
                    <Button :href="route('prestation')" color="black">Commander</Button>
                </div>
            </div>
            <div class="justify-center lg:relative lg:flex">
                <img src="/images/Image5.jpg" alt="image" />
                <div class="flex flex-col items-center bg-white lg:absolute lg:top-65 lg:border-b lg:border-black lg:px-10 lg:py-3">
                    <h2 class="text-xl font-medium">Maintenance éditoriale</h2>
                    <p class="py-3">Selon vos besoins</p>
                    <Button :href="route('prestation')" color="black">Commander</Button>
                </div>
            </div>
        </section>
        <section class="container my-25 flex flex-col items-center justify-center lg:mt-50">
            <h1 class="text-3xl font-bold lg:text-4xl">Par où commencer ?</h1>
            <ol class="py-16">
                <li class="flex border-b border-black py-5">
                    <span class="hidden w-20 text-6xl font-bold sm:block">1</span>
                    <div>
                        <h2 class="mt-1 text-xl font-bold"><span class="text-2xl sm:hidden">1. </span>Définition de votre projet</h2>
                        <p>Lors de notre 1er rendez-vous, nous analysons vos besoins et définissons ensemble le cadre de votre projet.</p>
                    </div>
                </li>
                <li class="flex border-b border-black py-5">
                    <span class="hidden w-20 text-6xl font-bold sm:block">2</span>
                    <div>
                        <h2 class="mt-1 text-xl font-bold"><span class="text-2xl sm:hidden">2. </span>Devis</h2>
                        <p>Nous établissons un devis en fonction de votre projet et de ses besoins.</p>
                    </div>
                </li>
                <li class="flex border-b border-black py-5">
                    <span class="hidden w-20 text-6xl font-bold sm:block">3</span>
                    <div>
                        <h2 class="mt-1 text-xl font-bold"><span class="text-2xl sm:hidden">3. </span>Maquette graphique</h2>
                        Nous établissons une maquette visuelle de votre site internet.
                    </div>
                </li>
                <li class="flex border-b border-black py-5">
                    <span class="hidden w-20 text-6xl font-bold sm:block">4</span>
                    <div>
                        <h2 class="mt-1 text-xl font-bold"><span class="text-2xl sm:hidden">4. </span>Phase de développement</h2>
                        Nous créons votre site internet selon la maquette graphique.
                    </div>
                </li>
                <li class="flex border-b border-black py-5">
                    <span class="hidden w-20 text-6xl font-bold sm:block">5</span>
                    <div>
                        <h2 class="mt-1 text-xl font-bold"><span class="text-2xl sm:hidden">5. </span>Optimisation mobile</h2>
                        Nous optimisons votre site internet dans sa version mobile et tablette.
                    </div>
                </li>
                <li class="flex border-b border-black py-5">
                    <span class="hidden w-20 text-6xl font-bold sm:block">6</span>
                    <div>
                        <h2 class="mt-1 text-xl font-bold"><span class="text-2xl sm:hidden">6. </span>Optimisation SEO</h2>
                        Nous optimisons votre site internet pour son référencement sur les moteurs de recherche.
                    </div>
                </li>
                <li class="flex border-b border-black py-5">
                    <span class="hidden w-20 text-6xl font-bold sm:block">7</span>
                    <div>
                        <h2 class="mt-1 text-xl font-bold"><span class="text-2xl sm:hidden">7. </span>Mise en ligne</h2>
                        Nous procédons à la mise en ligne de votre site internet.
                    </div>
                </li>
                <li class="flex border-b border-black py-5">
                    <span class="hidden w-20 text-6xl font-bold sm:block">8</span>
                    <div>
                        <h2 class="mt-1 text-xl font-bold"><span class="text-2xl sm:hidden">8. </span>Suivi & Mainteance</h2>
                        Nous nous occupons de la maintenance de votre site internet.
                    </div>
                </li>
            </ol>
            <Button :href="route('prestation')" color="green-inverse">Démarrez votre projet</Button>
        </section>
    </SiteLayout>
</template>
