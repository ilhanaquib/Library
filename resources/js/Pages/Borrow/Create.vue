<template>
    <AppLayout title="Borrow a Book">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Borrow A Book
            </h2>
          </template>
          <div class="flex justify-center items-center h-auto">
            <div class="py-12">
              <div class="max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <form @submit.prevent="submit">

                      <div class="py-5 px-5">
                        <label :for="book_id" class="block text-gray-700 text-sm font-bold mb-2">Book Id</label>
                        <input 
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                          input id="book_id"
                          v-model="form.book_id"
                          />
                      </div>
                      <div class="py-5 px-5">
                        <label :for="book_title" class="block text-gray-700 text-sm font-bold mb-2">Book Title</label>
                        <input 
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                          input id="book_title"
                          v-model="form.book_title"
                          />
                      </div>
                      <div class="py-5 px-5">
                        <label :for="user_id" class="block text-gray-700 text-sm font-bold mb-2">User Id</label>
                        <input 
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                          input id="user_id"
                          v-model="form.user_id"
                          />
                      </div>
                      <div class="py-5 px-5">
                        <label :for="date_borrowed" class="block text-gray-700 text-sm font-bold mb-2">Date Borrowed</label>
                        <input 
                          type="date"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                          input id="date_borrowed"
                          v-model="form.date_borrowed"
                          />
                      </div>
                      <div class="py-5 px-5">
                        <label :for="date_return" class="block text-gray-700 text-sm font-bold mb-2">Date Return</label>
                        <input 
                          type="date"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                          input id="date_return"
                          v-model="form.date_return"
                          />
                      </div>

                        <div class="py-5 px-5">
                          <button 
                            type="submit" 
                            :disabled="form.processing"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Borrow
                          </button>
                        </div>
                      </form>
                </div>
              </div>
            </div>
          </div>
    </AppLayout>
</template>
  
<script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  import { useForm, usePage } from '@inertiajs/vue3'

  const form = useForm({
  book_id: null,
  book_title: null,
  user_id: null,
  date_borrowed: null,
  date_return: null,
})

function submit() {
  form.post('borrow/book').then(() => {
    const { errors } = usePage();
    if (errors.any()) {
      // Handle validation errors
    } else {
      // Handle successful form submission
    }
  });
}
</script>