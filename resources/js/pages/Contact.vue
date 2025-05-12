<script setup>
import { Calendar } from '@/components/ui/calendar';
import SiteLayout from '@/layouts/SiteLayout.vue';
import { getLocalTimeZone, today } from '@internationalized/date';
import { Pencil } from 'lucide-vue-next';
import { computed, ref } from 'vue';

const slots = ['09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'];

const selectedSlot = ref(null);

const value = ref(today(getLocalTimeZone()));

const step = ref(1);

const formattedDate = computed(() => {
    if (!value.value) return '';

    // Convert CalendarDate → ISO → Date
    const isoDate = value.value.toString(); // format 'YYYY-MM-DD'
    const jsDate = new Date(isoDate);

    return new Intl.DateTimeFormat('fr-FR', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    }).format(jsDate);
});
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
                    <div class="flex items-center justify-center lg:items-start lg:justify-end lg:pt-17" v-if="step === 1">
                        <div class="absolute z-40 border-2 border-sky-900 bg-white px-10 pb-5 text-black">
                            <h2 class="py-10 text-center text-xl font-medium">Sélectionnez la date et l'heure</h2>
                            <div class="flex">
                                <Calendar
                                    locale="fr"
                                    v-model="value"
                                    :weekday-format="'short'"
                                    class="mr-10 h-full rounded-2xl border border-sky-800"
                                />
                                <div v-if="value" class="flex flex-col gap-2">
                                    <div v-for="slot in slots" :key="slot" class="flex items-center gap-2">
                                        <button
                                            @click="selectedSlot = slot"
                                            :class="[
                                                'rounded-lg border border-sky-800 py-2 font-medium',
                                                selectedSlot === slot ? 'w-24 bg-sky-200' : 'w-50 hover:bg-sky-100',
                                            ]"
                                        >
                                            {{ slot }}
                                        </button>
                                        <button
                                            v-if="selectedSlot === slot"
                                            @click="step = 2"
                                            class="w-24 rounded-lg bg-sky-800 py-2 font-medium text-white hover:bg-sky-700"
                                        >
                                            Suivant
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end pt-17" v-if="step === 2">
                        <div class="z-40 border-2 border-sky-900 bg-white px-10 pb-5 text-black lg:absolute">
                            <h2 class="py-10 text-center text-xl font-medium">Indiquez vos informations</h2>
                            <form action="" method="post" class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label for="nom" class="font-medium">Nom et Prénom</label>
                                    <input type="text" id="nom" required class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="société" class="font-medium">Société<span class="text-gray-400 italic"> (facultatif)</span></label>
                                    <input type="text" id="société" class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="email" class="font-medium">Email</label>
                                    <input type="text" id="email" required class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="telephone" class="font-medium">Téléphone</label>
                                    <input type="text" id="telephone" required class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div class="col-span-2 flex flex-col gap-2">
                                    <label for="details" class="font-medium">Indiquez les détails de votre projet</label>
                                    <textarea id="details" required class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div>
                                    <p class="font-medium">Date du rendez-vous</p>
                                    <div class="flex items-center gap-2 pt-3">
                                        <p>{{ formattedDate }} à {{ selectedSlot }}</p>
                                        <button @click="step = 1" title="Modifier" class="cursor-pointer"><Pencil class="h-4 w-4" /></button>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="choix" class="font-medium">Préférence du rendez-vous</label>
                                    <select id="choix" required class="rounded-lg border border-sky-800 py-2 text-center">
                                        <option value="tel">Par Téléphone</option>
                                        <option value="visio">Par Visio</option>
                                    </select>
                                </div>
                                <input
                                    type="submit"
                                    value="Confirmer le rendez-vous"
                                    class="col-span-2 rounded-lg bg-sky-800 py-2 font-medium text-white hover:bg-sky-700"
                                />
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-end pt-17" v-if="step === 3">
                        <div class="z-40 border-2 border-sky-900 bg-white px-10 pb-5 text-black lg:absolute">
                            <h2 class="py-10 text-center text-xl font-medium">Indiquez vos informations</h2>
                            <form action="" method="post" class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label for="nom" class="font-medium">Nom et Prénom</label>
                                    <input type="text" id="nom" required class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="société" class="font-medium">Société<span class="text-gray-400 italic"> (facultatif)</span></label>
                                    <input type="text" id="société" class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="email" class="font-medium">Email</label>
                                    <input type="text" id="email" required class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="telephone" class="font-medium">Téléphone</label>
                                    <input type="text" id="telephone" required class="rounded-lg border border-sky-800 py-2" />
                                </div>
                                <div class="col-span-2 flex flex-col gap-2">
                                    <label for="details" class="font-medium">Indiquez les détails de votre projet</label>
                                    <textarea id="details" required class="rounded-lg border border-sky-800 py-2" />
                                </div>

                                <input
                                    type="submit"
                                    value="Envoyer"
                                    class="col-span-2 rounded-lg bg-sky-800 py-2 font-medium text-white hover:bg-sky-700"
                                />
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-end pt-17" v-if="step === 4">
                        <div class="z-40 border-2 border-sky-900 bg-white p-40 text-center text-black lg:absolute">
                            <h2 class="py-10 text-xl font-medium">Contactez nous par mail</h2>
                            <p>Vous pouvez nous contacter à l’adresse :</p>
                            <a href="mailto:contact@jbc.fr" class="underline">contact@jbc.fr</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container h-1/2 text-xl">
                <fieldset class="mt-20 space-y-2">
                    <div>
                        <input type="radio" id="rdv" class="mr-3" name="choix" checked @click="step = 1" />
                        <label for="rdv">Prendre rendez-vous</label>
                    </div>
                    <div>
                        <input type="radio" id="devis" class="mr-3" name="choix" @click="step = 3" />
                        <label for="devis">Demander un devis</label>
                    </div>
                    <div>
                        <input type="radio" id="mail" class="mr-3" name="choix" @click="step = 4" />
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
    margin-bottom: var(--navbar-height);
}
</style>
