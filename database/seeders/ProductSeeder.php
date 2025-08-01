<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pizzaCategory = Category::where('name', 'Pizza')->first();
        $burgerCategory = Category::where('name', 'Burger')->first();
        $riceCategory = Category::where('name', 'Rice')->first();
        $snacksCategory = Category::where('name', 'Snacks')->first();
        $drinksCategory = Category::where('name', 'Drinks')->first();

        $products = [
            // Pizzas
            [
                'name' => 'American Favorite',
                'price' => 4.87,
                'image' => 'pizzas/american-favorite.jpg',
                'description' => 'Delicious pizza with pepperoni, mushrooms, and cheese',
                'category_id' => $pizzaCategory->id,
            ],
            [
                'name' => 'Chicken Mushroom',
                'price' => 5.87,
                'image' => 'pizzas/chicken-mushroom.jpg',
                'description' => 'Grilled chicken with fresh mushrooms and mozzarella',
                'category_id' => $pizzaCategory->id,
            ],
            [
                'name' => 'Favorite Cheese',
                'price' => 6.57,
                'image' => 'pizzas/favorite-cheese.jpg',
                'description' => 'A blend of our finest cheeses with special herbs',
                'category_id' => $pizzaCategory->id,
            ],
            [
                'name' => 'Meat Lovers',
                'price' => 8.57,
                'image' => 'pizzas/meat-lovers.jpg',
                'description' => 'Loaded with pepperoni, sausage, bacon, and ham',
                'category_id' => $pizzaCategory->id,
            ],
            [
                'name' => 'Super Supreme',
                'price' => 9.75,
                'image' => 'pizzas/super-supreme.jpg',
                'description' => 'The ultimate pizza with all the toppings',
                'category_id' => $pizzaCategory->id,
            ],
            [
                'name' => 'Ultimate Cheese',
                'price' => 4.27,
                'image' => 'pizzas/ultimate-cheese.jpg',
                'description' => 'Four cheese blend on crispy crust',
                'category_id' => $pizzaCategory->id,
            ],

            // Burgers
            [
                'name' => 'Classic Beef Burger',
                'price' => 7.99,
                'image' => 'burgers/classic-beef.jpg',
                'description' => 'Juicy beef patty with lettuce, tomato, and our special sauce',
                'category_id' => $burgerCategory->id,
            ],
            [
                'name' => 'Chicken Deluxe',
                'price' => 8.99,
                'image' => 'burgers/chicken-deluxe.jpg',
                'description' => 'Grilled chicken breast with avocado and bacon',
                'category_id' => $burgerCategory->id,
            ],
            [
                'name' => 'Veggie Burger',
                'price' => 6.99,
                'image' => 'burgers/veggie.jpg',
                'description' => 'Plant-based patty with fresh vegetables',
                'category_id' => $burgerCategory->id,
            ],

            // Rice
            [
                'name' => 'Chicken Fried Rice',
                'price' => 9.50,
                'image' => 'rice/chicken-fried.jpg',
                'description' => 'Wok-fried rice with tender chicken pieces',
                'category_id' => $riceCategory->id,
            ],
            [
                'name' => 'Vegetable Rice',
                'price' => 7.50,
                'image' => 'rice/vegetable.jpg',
                'description' => 'Steamed rice with mixed vegetables',
                'category_id' => $riceCategory->id,
            ],

            // Snacks
            [
                'name' => 'French Fries',
                'price' => 3.99,
                'image' => 'snacks/french-fries.jpg',
                'description' => 'Crispy golden french fries',
                'category_id' => $snacksCategory->id,
            ],
            [
                'name' => 'Onion Rings',
                'price' => 4.50,
                'image' => 'snacks/onion-rings.jpg',
                'description' => 'Crispy battered onion rings',
                'category_id' => $snacksCategory->id,
            ],
            [
                'name' => 'Chicken Wings',
                'price' => 8.99,
                'image' => 'snacks/chicken-wings.jpg',
                'description' => 'Spicy buffalo chicken wings',
                'category_id' => $snacksCategory->id,
            ],

            // Drinks
            [
                'name' => 'Orange Juice',
                'price' => 2.87,
                'image' => 'drinks/orange-juice.jpg',
                'description' => 'Fresh squeezed orange juice',
                'category_id' => $drinksCategory->id,
            ],
            [
                'name' => 'Coca Cola',
                'price' => 1.99,
                'image' => 'drinks/coca-cola.jpg',
                'description' => 'Classic Coca Cola',
                'category_id' => $drinksCategory->id,
            ],
            [
                'name' => 'Iced Coffee',
                'price' => 3.50,
                'image' => 'drinks/iced-coffee.jpg',
                'description' => 'Refreshing iced coffee',
                'category_id' => $drinksCategory->id,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
