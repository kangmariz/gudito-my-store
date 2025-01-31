<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    categories:{
        type:Array,
        required:true,
    }
}
)
</script>

<template>

    <div class="min-h-screen w-full flex flex-col items-center gap-3 py-5">
        <h1 class="text-4xl text-center font-semibold ">Categories</h1>
        <table class="table-fixed border-collapse border border-slate-400 p-2">
            <thead class="bg-green-500 text-white/80">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="category in categories" :key="category.id">
                    <td>{{ category.name }}</td>
                    <td>{{ category.description }}</td>
                </tr>
            </tbody>
        </table>

        <Link href="/products" class="hover:text-sky-800 hover:underline duration-100">Go to Products</Link>
    </div>




</template>
