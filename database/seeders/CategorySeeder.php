<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Pizza',
                'icon' => '🍕',
            ],
            [
                'name' => 'Burger',
                'icon' => '🍔',
            ],
            [
                'name' => 'Rice',
                'icon' => '🍚',
            ],
            [
                'name' => 'Snacks',
                'icon' => '🍿',
            ],
            [
                'name' => 'Drinks',
                'icon' => '🥤',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
