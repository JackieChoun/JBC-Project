<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps(['href', 'color']);
let classes = ref([]);

if (props.color == 'black') {
    classes.value[0] = 'border-black bg-gradient-to-r from-black to-zinc-600';
    classes.value[1] = 'border-white text-white group-hover:bg-black';
}
if (props.color == 'black-inverse') {
    classes.value[0] = 'border-white bg-gradient-to-r from-black to-zinc-600';
    classes.value[1] = 'border-black text-white group-hover:bg-black';
}
if (props.color == 'green') {
    classes.value[0] = 'border-[#2B9366] bg-gradient-to-r from-[#2B9366] to-[#2AB176]';
    classes.value[1] = 'border-sky-800 text-white group-hover:bg-[#2B9366]';
}
if (props.color == 'green-inverse') {
    classes.value[0] = 'border-[#2B9366] bg-gradient-to-r from-[#2B9366] to-[#2AB176]';
    classes.value[1] = 'border-white text-white group-hover:bg-[#2B9366]';
}
</script>

<template>
    <Link :href="href" class="group border" :class="classes[0]">
        <div class="border-2 px-12 py-2 text-lg transition-all duration-400" :class="classes[1]">
            <slot />
        </div>
    </Link>
</template>
