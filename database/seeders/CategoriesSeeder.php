<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Fashion & Apparel', 'description' => 'Clothing, footwear, and accessories'],
            ['name' => 'Electronics & Gadgets', 'description' => 'Mobile phones, laptops, and accessories'],
            ['name' => 'Health & Beauty', 'description' => 'Cosmetics, skincare, and wellness products'],
            ['name' => 'Home & Living', 'description' => 'Furniture, home decor, and appliances'],
            ['name' => 'Sports & Fitness', 'description' => 'Sportswear, gym equipment, and accessories'],
            ['name' => 'Food & Beverages', 'description' => 'Restaurants, cafés, and specialty food stores'],
            ['name' => 'Toys & Games', 'description' => 'Children’s toys, board games, and hobby shops'],
            ['name' => 'Books & Stationery', 'description' => 'Bookstores, school supplies, and office essentials'],
            ['name' => 'Entertainment & Leisure', 'description' => 'Cinemas, arcades, and activity centers'],
            ['name' => 'Automotive & Accessories', 'description' => 'Car accessories, motorcycle gear, and services'],
        ];

        foreach($categories as $category) {
            \App\Models\Categories::create($category);
        }
    }
}
