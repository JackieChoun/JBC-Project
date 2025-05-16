<script setup></script>

<template>
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

        <input type="submit" value="Envoyer" class="col-span-2 lg:mt-8" />
    </form>
</template>
