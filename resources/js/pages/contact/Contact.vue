<script setup>
import SiteLayout from '@/layouts/SiteLayout.vue';
import { ref } from 'vue';
import Appointment from './components/Appointment.vue';
import Email from './components/Email.vue';
import Quote from './components/Quote.vue';

const component = ref('appointment');
</script>

<template>
    <SiteLayout>
        <div id="header">
            <section class="h-1/2 bg-gradient-to-r from-sky-950 to-sky-800 text-white">
                <div class="container h-full grid-cols-2 lg:grid">
                    <div class="flex h-full justify-center pt-25 lg:justify-start">
                        <h1 class="text-center text-2xl font-bold lg:text-start lg:text-4xl">
                            Prise de rendez-vous <br />
                            & demande de devis
                        </h1>
                    </div>
                    <div class="flex flex-col gap-2 pt-2 text-black lg:hidden">
                        <label for="contact" class="font-medium">Faire une demande</label>
                        <select id="contact" v-model="component" required>
                            <option value="appointment">Prendre rendez-vous</option>
                            <option value="quote">Demander un devis</option>
                            <option value="email">Envoyer un mail</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-center pb-5 lg:items-start lg:justify-end lg:pt-17 lg:pb-0">
                        <div class="z-40 border-sky-900 bg-white text-black lg:absolute lg:min-h-150 lg:w-190 lg:border-2 lg:px-16 lg:py-8">
                            <Appointment v-if="component == 'appointment'" />
                            <Quote v-if="component == 'quote'" />
                            <Email v-if="component == 'email'" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="container hidden h-1/2 text-xl lg:block">
                <fieldset class="mt-20 space-y-2">
                    <div>
                        <input type="radio" id="rdv" class="mr-3" v-model="component" value="appointment" />
                        <label for="rdv">Prendre rendez-vous</label>
                    </div>
                    <div>
                        <input type="radio" id="devis" class="mr-3" v-model="component" value="quote" />
                        <label for="devis">Demander un devis</label>
                    </div>
                    <div>
                        <input type="radio" id="mail" class="mr-3" v-model="component" value="email" />
                        <label for="mail">Envoyer un mail</label>
                    </div>
                </fieldset>
            </section>
        </div>
    </SiteLayout>
</template>

<style scoped>
#header {
    height: calc(100vh - 2 * var(--navbar-height));
}
</style>
