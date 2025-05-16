<script setup>
import { Calendar } from '@/components/ui/calendar';
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
function disableInvalidDates(date) {
    const jsDate = new Date(date.year, date.month - 1, date.day);
    const today = new Date();
    const weekend = jsDate.getDay() === 0 || jsDate.getDay() === 6;
    const past = jsDate < today;

    return weekend || past;
}
</script>

<template>
    <template v-if="step == 1">
        <h2 class="py-5 text-center text-xl font-medium lg:py-0 lg:pb-10">Sélectionnez la date et l'heure</h2>
        <div class="flex flex-col items-center justify-center gap-5 lg:flex-row lg:items-start">
            <Calendar
                locale="fr"
                v-model="value"
                :isDateDisabled="disableInvalidDates"
                :weekday-format="'short'"
                class="h-full rounded-2xl border border-sky-800 lg:mr-10"
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
    </template>
    <template v-if="step == 2">
        <h2 class="py-5 text-center text-xl font-medium lg:py-0 lg:pb-10">Indiquez vos informations</h2>
        <form action="" method="post" class="grid grid-cols-2 gap-4">
            <div class="flex flex-col gap-2">
                <label for="nom" class="font-medium">Nom et Prénom</label>
                <input type="text" id="nom" required />
            </div>
            <div class="flex flex-col gap-2">
                <label for="société" class="font-medium">Société<span class="text-gray-400 italic"> (facultatif)</span></label>
                <input type="text" id="société" />
            </div>
            <div class="flex flex-col gap-2">
                <label for="email" class="font-medium">Email</label>
                <input type="text" id="email" required />
            </div>
            <div class="flex flex-col gap-2">
                <label for="telephone" class="font-medium">Téléphone</label>
                <input type="text" id="telephone" required />
            </div>
            <div class="col-span-2 flex flex-col gap-2">
                <label for="details" class="font-medium">Indiquez les détails de votre projet</label>
                <textarea id="details" required />
            </div>
            <div>
                <p class="font-medium">Date du rendez-vous</p>
                <div class="flex items-center gap-2 pt-3">
                    <p>{{ formattedDate }} à {{ selectedSlot }}</p>
                    <button @click="step = 1" title="Modifier la date" class="cursor-pointer"><Pencil class="h-4 w-4" /></button>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <label for="choix" class="font-medium">Préférence du rendez-vous</label>
                <select id="choix" required>
                    <option value="tel">Par Téléphone</option>
                    <option value="visio">Par Visio</option>
                </select>
            </div>
            <input type="submit" value="Confirmer le rendez-vous" class="col-span-2 lg:mt-8" />
        </form>
    </template>
</template>
