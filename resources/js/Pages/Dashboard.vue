<template>
    <AppLayout title="Dashboard">
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Dashboard
        </h2>
      </template>

      <!-- component -->
<div class="flex flex-col">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="bg-white border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Book Id
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Book Title
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Date Borrowed
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Date Return/ed
              </th>
            </tr>
          </thead>

          <tbody>
            <tr class="bg-gray-100 border-b" v-for="book,index in books" :key="book.id" >
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ index + 1 }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ book.id }}
              </td>

              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ book.title }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ book.borrowed_on }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ book.return_on }}
              </td>
            </tr>   
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    </AppLayout>
  </template>
  
  <script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  import { ref } from 'vue'
  import { usePage } from '@inertiajs/vue3';

  const props = usePage().props;
  const books = ref(props.books);
  const index = ref(props.index);

  </script>
  