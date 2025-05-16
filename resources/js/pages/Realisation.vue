<script setup>
import Contact from '@/components/custom/ContactFooter.vue';
import SiteLayout from '@/layouts/SiteLayout.vue';
</script>

<template>
    <SiteLayout>
        <div class="container my-15">
            <div class="lg:text-center">
                <h1 class="pb-10 text-3xl font-bold lg:text-4xl">Réalisations</h1>
                <p>
                    Vous trouverez ci-dessous un échantillon de sites internet que nous avons développé, pour le compte de nos clients et de nos
                    partenaires.
                </p>
            </div>
            <div class="flex grid-cols-3 flex-col gap-5 pt-10 lg:grid lg:gap-10">
                <a href="#" class="relative">
                    <img src="/images/Falcou.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">Falcou Chez Vous</h2>
                            <p class="text-sm lg:text-base">Traiteur - Livraison de repas</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">E-COMMERCE</p>
                    </div>
                </a>
                <a href="#" class="relative">
                    <img src="/images/C&D.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">C&D Advice</h2>
                            <p class="text-sm lg:text-base">Courtier en assurance</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">VITRINE</p>
                    </div>
                </a>
                <a href="#" class="relative">
                    <img src="/images/Kinalgo.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">Kinalgo</h2>
                            <p class="text-sm lg:text-base">Professionnel de santé</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">VITRINE</p>
                    </div>
                </a>
                <div class="col-span-2 row-span-2 bg-gray-400"></div>
                <a href="#" class="relative col-span-1 col-start-3">
                    <img src="/images/Graphique.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">Evolution Graphique</h2>
                            <p class="text-sm lg:text-base">Imprimeur professionnel</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">E-COMMERCE</p>
                    </div>
                </a>
                <a href="#" class="relative col-span-1 col-start-3">
                    <img src="/images/Ferro.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">Ferro Lèbres</h2>
                            <p class="text-sm lg:text-base">Projet immobilier</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">VITRINE</p>
                    </div>
                </a>
                <a href="#" class="relative">
                    <img src="/images/Captelac.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">Captelac</h2>
                            <p class="text-sm lg:text-base">Importateur grossiste</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">E-COMMERCE</p>
                    </div>
                </a>
                <a href="#" class="relative">
                    <img src="/images/qunfil.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">Qunfil</h2>
                            <p class="text-sm lg:text-base">Artiste - String Art</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">E-COMMERCE</p>
                    </div>
                </a>
                <a href="#" class="relative">
                    <img src="/images/territoiresetservices.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">Territoires & Services</h2>
                            <p class="text-sm lg:text-base">Régie de quartier</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">VITRINE</p>
                    </div>
                </a>

                <a href="#" class="relative col-span-1 col-start-1 row-start-5">
                    <img src="/images/Clef.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">La Clef Des Champs</h2>
                            <p class="text-sm lg:text-base">Magasin de fruits et légumes</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">VITRINE</p>
                    </div>
                </a>
                <a href="#" class="relative col-span-1 col-start-1">
                    <img src="/images/Reynerie.jpg" alt="Réalisations" />
                    <div class="absolute bottom-0 flex w-full items-center justify-between bg-black/90 p-4 text-white">
                        <div>
                            <h2 class="font-semibold lg:text-lg">Reynerie Services</h2>
                            <p class="text-sm lg:text-base">Régie de quartier</p>
                        </div>
                        <p class="text-xs font-medium lg:text-sm">VITRINE</p>
                    </div>
                </a>
                <Contact class="col-span-2 col-start-2 row-span-2 row-start-5 flex justify-center text-center">
                    <template #title>Besoin d’un site internet ?</template>
                    <template #paragraphe>Prenons rendez-vous, et discutons de votre projet.</template>
                </Contact>
            </div>
        </div>
    </SiteLayout>
</template>
