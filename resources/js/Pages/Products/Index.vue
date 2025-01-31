<script setup>
import { Link } from '@inertiajs/vue3';

defineProps( {
 categories:{
    type:Array,
    required:true
 },

 products:{
    type:Array,
    required:true
 },
 selectedCategory:{
    type:String,
    required:true
 }
})

</script>

<template>
    <div class="flex">
        <nav class="min-h-screen w-[20%] shadow-lg">

            <h2  class="text-center text-2xl font-semibold my-3">

            <Link href="/products">Categories</Link>

            </h2>
            <ul v-for="category in categories" :key="category.id" >
                <li class=" p-2 cursor-pointer hover:bg-slate-600 hover:text-slate-300 duration-100">
                    <Link :href='"/products/"+ category.id' class="w-full ">
                    {{ category.name }}
                    </Link>
                </li>
            </ul>
        </nav>

        <div class="w-3/4 px-3">
            <h1  class="text-center text-2xl font-semibold my-3">{{ selectedCategory? selectedCategory.name: "All Products" }}</h1>
            <div class="grid grid-cols-3 gap-3">
                <div v-for="product in products" :key="product.id">
                   <div class="shadow-lg p-2 rounded-lg animation-bounce">
                    <h5 class="text-lg font-semibold"> {{ product.name }}</h5>
                    <p>{{ product.description  }}</p>
                    <div class="flex justify-between">
                        <p class="text-[10px]">Whole Sale Price: P{{ product.whole_sale_price  }}</p>
                    <p class="text-[10px]">Retail Price: P{{ product.retail_price  }}</p>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</template>
