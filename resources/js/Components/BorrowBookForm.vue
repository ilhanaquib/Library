<template>
    <div class="py-5 px-5">
        <label :for="inputId" class="block text-gray-700 text-sm font-bold mb-2">{{ label }}</label>
        <input 
          :type="inputType" 
          :id="inputId" 
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
          :value="value"
          @input="updateValue($event.target.value)"
          />
    </div>
</template>

<script setup>
import { defineProps, ref } from 'vue';

const props = defineProps({
    label: String,
    inputType: String,
    inputValue: String,
});

const inputId = `input_${props.label.replace(/\s/g, '_').toLowerCase()}`;
const value = ref(props.inputValue);

const updateValue = (newValue) => {
    value.value = newValue;
    // Emit a custom event to notify the parent component about the value change
    // You can customize the event name as per your requirements
    emit('input', newValue);
};
</script>
