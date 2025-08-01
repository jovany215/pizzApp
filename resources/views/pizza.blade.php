@extends('layouts.app')
@section('pizza')
    <div class="flex h-screen">
        
        <x-sidebar/>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Search and Filters -->
            <div class="mb-8">
                <div class="flex items-center justify-between flex-wrap gap-y-4 mb-4">
                    <!-- Menu Icon for mobile -->
                    <div class="lg:hidden">
                        <button id="menu-toggle" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>

                    <!-- Search bar and out of stock text -->
                    <div class="w-full order-last lg:order-none lg:w-2/3 flex-grow lg:flex-grow-0 flex items-center justify-between">
                        <div class="relative flex-grow mr-4">
                            <input type="text" placeholder="Search category or menu" class="w-full pl-4 pr-10 py-2 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute right-3 top-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <p class="text-primary text-sm hidden lg:block">5 items out of stocks</p>
                    </div>

                    <!-- Cart Icon for mobile -->
                    <div class="lg:hidden">
                        <button id="cart-toggle" class="relative p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="absolute top-0 right-0 bg-primary text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-medium">4</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="flex items-center px-4 py-2 bg-[#FBF2E4] text-primary rounded-full font-medium">
                        <img src="images/pizza.png" alt="Pizza" class="w-5 h-5 mr-2">
                        <span>Pizza</span>
                    </button>
                    <button class="flex items-center px-4 py-2 bg-secondary text-gray-700 rounded-full font-medium">
                        <img src="images/burger.png" alt="Burger" class="w-5 h-5 mr-2">
                        <span>Burger</span>
                    </button>
                    <button class="flex items-center px-4 py-2 bg-secondary text-gray-700 rounded-full font-medium">
                        <img src="images/rice.png" alt="Rice" class="w-5 h-5 mr-2">
                        <span>Rice</span>
                    </button>
                    <button class="flex items-center px-4 py-2 bg-secondary text-gray-700 rounded-full font-medium">
                        <img src="images/snacks.png" alt="Snacks" class="w-5 h-5 mr-2">
                        <span>Snacks</span>
                    </button>
                    <button class="flex items-center px-4 py-2 bg-secondary text-gray-700 rounded-full font-medium">
                        <img src="images/drink.png" alt="Drinks" class="w-5 h-5 mr-2">
                        <span>Drinks</span>
                    </button>
                </div>
            </div>
            
            <!-- Pizza Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Pizza Card 1 -->
                <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-medium text-lg text-center">American Favorite</h3>
                    <p class="text-primary font-medium text-center">$4.87</p>
                    <p class="text-gray-500 text-sm text-center">18 Pan Available</p>
                </div>
                
                <!-- Pizza Card 2 -->
                <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-medium text-lg text-center">Chicken Mushroom</h3>
                    <p class="text-primary font-medium text-center">$5.87</p>
                    <p class="text-gray-500 text-sm text-center">9 Pan Available</p>
                </div>
                
                <!-- Pizza Card 3 -->
                <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-medium text-lg text-center">Favorite Cheese</h3>
                    <p class="text-primary font-medium text-center">$6.57</p>
                    <p class="text-gray-500 text-sm text-center">7 Pan Available</p>
                </div>
                
                <!-- Pizza Card 4 -->
                <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-medium text-lg text-center">Meat Lovers</h3>
                    <p class="text-primary font-medium text-center">$6.37</p>
                    <p class="text-gray-500 text-sm text-center">14 Pan Available</p>
                </div>
                
                <!-- Pizza Card 5 -->
                <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-medium text-lg text-center">Super Supreme</h3>
                    <p class="text-primary font-medium text-center">$5.75</p>
                    <p class="text-gray-500 text-sm text-center">10 Pan Available</p>
                </div>
                
                <!-- Pizza Card 6 -->
                <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-medium text-lg text-center">Ultimate Cheese</h3>
                    <p class="text-primary font-medium text-center">$4.27</p>
                    <p class="text-gray-500 text-sm text-center">8 Pan Available</p>
                </div>
            </div>
        </div>

        <!-- Menu Backdrop -->
        <div id="menu-backdrop" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"></div>

        <!-- Cart Backdrop -->
        <div id="cart-backdrop" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"></div>
    <x-order-summnary/>
    </div>

    
   @endsection