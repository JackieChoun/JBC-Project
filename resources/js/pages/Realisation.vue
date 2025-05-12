<script setup>
import Contact from '@/components/custom/ContactFooter.vue';
import SiteLayout from '@/layouts/SiteLayout.vue';
</script>

<template>
    <SiteLayout>
        <div class="container my-15">
            <div class="text-center">
                <h1 class="pb-10 text-4xl font-bold">Réalisations</h1>
                <p>
                    Vous trouverez ci-dessous un échantillon de sites internet que nous avons développé, pour le compte de nos clients et de nos
                    partenaires.
                </p>
            </div>
        </div>
        <Contact>
            <template #title>Besoin d’un site internet ?</template>
            <template #paragraphe>N’hésitez pas à réserver un créneau, je répondrai à toutes vos questions avec plaisir.</template>
        </Contact>
    </SiteLayout>
</template>
