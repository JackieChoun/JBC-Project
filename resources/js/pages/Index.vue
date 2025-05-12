<script setup>
import Button from '@/components/custom/Button.vue';
import Contact from '@/components/custom/ContactFooter.vue';
import Header from '@/layouts/components/Header.vue';
import SiteLayout from '@/layouts/SiteLayout.vue';
</script>

<template>
    <SiteLayout>
        <template v-slot:header>
            <Header />
        </template>

        <div class="container lg:my-15 lg:flex">
            <img src="/images/sublime_code_development_1.jpg" alt="image" />
            <div class="flex flex-col justify-evenly space-y-5 py-5 text-center lg:space-y-0 lg:px-15 lg:py-0 lg:text-start">
                <h1 class="text-3xl font-medium uppercase lg:text-4xl">
                    Site <span class="bg-gradient-to-t from-sky-400 to-sky-600 bg-clip-text text-transparent">Vitrine</span>
                </h1>
                <p>
                    Une vitrine de votre savoir-faire, mettant en valeur votre entreprise et vos services.<br />
                    Gagnez en visibilité et en crédibilité avec un site web élégant et professionnel.
                </p>
                <Button :href="route('prestation')" color="black" class="self-center lg:self-start">En savoir +</Button>
            </div>
        </div>
        <div class="container my-15 flex flex-col-reverse lg:flex-row">
            <div class="flex flex-col justify-evenly space-y-5 bg-black py-5 text-center text-white lg:space-y-0 lg:px-15 lg:py-0 lg:text-start">
                <h1 class="text-3xl font-medium uppercase lg:text-4xl">
                    Site <span class="bg-gradient-to-t from-sky-400 to-sky-600 bg-clip-text text-transparent">E-commerce</span>
                </h1>
                <p>
                    Vendez en ligne facilement avec une boutique performante et sécurisée. <br />
                    Simple à gérer, convertissez vos visiteurs en clients.
                </p>
                <Button :href="route('prestation')" color="black-inverse" class="self-center lg:self-start">En savoir +</Button>
            </div>
            <img src="/images/sublime_code_design_1.jpg" alt="image" />
        </div>
        <div class="container lg:my-15 lg:flex">
            <img src="/images/sublime_code_marketing_2.jpg" alt="image" />
            <div class="flex flex-col justify-evenly space-y-5 py-5 text-center lg:space-y-0 lg:px-15 lg:py-0 lg:text-start">
                <h1 class="text-3xl font-medium uppercase lg:text-4xl">
                    Site <span class="bg-gradient-to-t from-sky-400 to-sky-600 bg-clip-text text-transparent">Sur Mesure</span>
                </h1>
                <p>
                    Vous avez un projet spécifique avec des fonctionnalités particulières ? <br />
                    Ce site unique s’adapte parfaitement à vos besoins, 100% personnalisé, à votre image, et sans limite.
                </p>
                <Button :href="route('prestation')" color="black" class="self-center lg:self-start">En savoir +</Button>
            </div>
        </div>
        <div class="container my-15 flex flex-col-reverse lg:flex-row">
            <div class="flex flex-col justify-evenly space-y-5 bg-black py-5 text-center text-white lg:space-y-0 lg:px-15 lg:py-0 lg:text-start">
                <h1 class="text-3xl font-medium uppercase lg:text-4xl">
                    Hébergement & <span class="bg-gradient-to-t from-sky-400 to-sky-600 bg-clip-text text-transparent">Maintenance</span>
                </h1>
                <p>
                    Solutions d’hébergement performantes et maintenance technique.<br />
                    Mises à jour, sauvegardes, sécurité : vous restez concentré sur votre activité, on s’occupe du reste.
                </p>
                <Button :href="route('prestation')" color="black-inverse" class="self-center lg:self-start">En savoir +</Button>
            </div>
            <img src="/images/sublime_code_hosting.jpg" alt="image" />
        </div>
        <div class="container lg:my-15 lg:flex">
            <img src="/images/sublime_code_hosting_1.jpg" alt="image" />
            <div class="flex flex-col justify-evenly space-y-5 py-5 text-center lg:space-y-0 lg:px-15 lg:py-0 lg:text-start">
                <h1 class="text-3xl font-medium uppercase lg:text-4xl">
                    Référencement <span class="bg-gradient-to-t from-sky-400 to-sky-600 bg-clip-text text-transparent">Web</span>
                </h1>
                <p>
                    Un beau site, c’est bien. Un site visible, c’est mieux.<br />
                    Atterrissez en 1ère page de Google et attirez un trafic de qualité.
                </p>
                <Button :href="route('prestation')" color="black" class="self-center lg:self-start">En savoir +</Button>
            </div>
        </div>
        <Contact>
            <template #title>Une question ?</template>
            <template #paragraphe>N’hésitez pas à réserver un créneau, nous répondrons à toutes vos questions avec plaisir.</template>
        </Contact>
    </SiteLayout>
</template>
