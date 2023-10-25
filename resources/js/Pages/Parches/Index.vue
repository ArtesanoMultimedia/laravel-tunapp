<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {ref} from "vue";
import { Inertia } from '@inertiajs/inertia';

const newParche = ref({
    title: '',
    description: '',
    date_time: ''
});

function createParche() {
    Inertia.post('/parches/store', newParche.value);
}

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Parches
            </h2>
        </template>

        <div class="my-6">
            <form @submit.prevent="createParche">
                <v-text-field
                    v-model="newParche.title"
                    label="Título"
                    required
                ></v-text-field>

                <v-textarea
                    v-model="newParche.description"
                    label="Descripción"
                    required
                ></v-textarea>

                <v-date-picker v-model="newParche.date_time"></v-date-picker>

                <v-btn type="submit">Añadir Parche</v-btn>
            </form>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        <div
                            class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                            <h1>Parches</h1>

                            <!--                            Lista de parches -->
                            <div>
                                <div class="flex items-center">

                                    <v-list
                                        v-if="parches && parches.length > 0"
                                        elevation="0"
                                        class="parches-container bg-white z-50 fixed top-[5.8rem] right-8 w-1/4 p-3 text-grey-darken-3 text-xl rounded-b-lg"
                                    >
                                        <v-list-item
                                            v-for="parche in parches"
                                            :key="parche.title"
                                        >
                                            <v-list-item-content>
                                                <v-list-item-title v-text="parche.title"></v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                    </v-list>



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
    .parches-container {
        max-height: 20rem;
        overflow-y: auto;
    }
</style>
