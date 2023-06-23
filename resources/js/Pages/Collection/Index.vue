<template>
    <AppLayout title="Collection">
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Collection
        </h2>
      </template>

      <div class="flex justify-center items-center h-screen">
        <div class="py-12">
          <div class="max-w-max sm:px-6 lg:px-8 ">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
              <Link v-for="collection in collections" :key="collection.id" :href="`/collection/${collection.id}`" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 cursor-pointer">
                <div class="flex">
                    <div class="w-50">
                        <img :src="collection.image" :alt="collection.title">
                    </div>
                    <div class="px-4 py-3">
                        <h1 class="font-bold">{{ collection.title }}</h1>
                        <div class="text-gray-500 ">
                            <p >{{ collection.author }}</p>
                            <p>{{ collection.date_published }}</p>
                        </div>
                    </div>
                </div>
              </Link>
            </div>
          </div>
        </div>
      </div>
    </AppLayout>
  </template>
  
  <script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  import { defineProps } from 'vue';
  import { Link } from '@inertiajs/vue3'

  defineProps({
    collections: {
      type: Array,
      required: true,
    },
  });
  </script>