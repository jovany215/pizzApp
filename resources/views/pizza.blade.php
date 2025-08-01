<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#F59E0B',
                        secondary: '#F3F4F6',
                        dark: '#1F2937',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-[#FAFAFA] font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="fixed inset-y-0 left-0 z-50 w-20 bg-white shadow-md flex flex-col items-center py-8 transform -translate-x-full transition-transform duration-300 ease-in-out lg:relative lg:translate-x-0">
            <div class="mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            
            <nav class="flex flex-col space-y-8">
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </a>
                <a href="#" class="text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary transition-colors mt-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </a>
            </nav>
        </div>

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

        <!-- Order Summary -->
        <div id="order-summary" class="fixed top-0 right-0 z-50 h-screen w-80 bg-white shadow-md flex flex-col transform translate-x-full transition-transform duration-300 ease-in-out lg:relative lg:w-96 lg:translate-x-0">
            <!-- Header -->
            <div class="p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="font-bold text-lg">#907653</h2>
                        <p class="text-gray-500">Table T1</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-4 py-2 bg-primary text-white rounded-lg text-sm">Dine In</button>
                        <button class="px-4 py-2 bg-secondary text-gray-700 rounded-lg text-sm">Take Away</button>
                    </div>
                </div>
            </div>

            <!-- Item List (Scrollable) -->
            <div class="flex-grow overflow-y-auto p-6 border-y border-gray-200">
                <!-- Orange Juice -->
                <div class="pb-4 mb-4 border-b border-gray-200 last:border-b-0 last:mb-0 last:pb-0">
                    <div class="flex justify-between mb-2">
                        <div>
                            <h4 class="font-medium">Orange juice</h4>
                            <p class="text-gray-500 text-sm">Crust: Stuffed Crust Soils</p>
                            <p class="text-gray-500 text-sm">Extras: Extra Mozzarella</p>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">$4.87</p>
                            <div class="flex items-center justify-end space-x-2 mt-1">
                                <button class="text-gray-500">-</button>
                                <span>1</span>
                                <button class="text-gray-500">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- American Favorite -->
                <div class="pb-4 mb-4 border-b border-gray-200 last:border-b-0 last:mb-0 last:pb-0">
                    <div class="flex justify-between mb-2">
                        <div>
                            <h4 class="font-medium">American Favorite</h4>
                            <p class="text-gray-500 text-sm">Crust: Stuffed Crust Soils</p>
                            <p class="text-gray-500 text-sm">Extras: Extra Mozzarella</p>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">$4.87</p>
                            <div class="flex items-center justify-end space-x-2 mt-1">
                                <button class="text-gray-500">-</button>
                                <span>1</span>
                                <button class="text-gray-500">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Super Supreme -->
                <div class="pb-4 mb-4 border-b border-gray-200 last:border-b-0 last:mb-0 last:pb-0">
                    <div class="flex justify-between mb-2">
                        <div>
                            <h4 class="font-medium">Super Supreme</h4>
                            <p class="text-gray-500 text-sm">Crust: Stuffed Crust Cheese</p>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">$5.75</p>
                            <div class="flex items-center justify-end space-x-2 mt-1">
                                <button class="text-gray-500">-</button>
                                <span>1</span>
                                <button class="text-gray-500">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Favorite Cheese -->
                <div class="pb-4 mb-4 border-b border-gray-200 last:border-b-0 last:mb-0 last:pb-0">
                    <div class="flex justify-between mb-2">
                        <div>
                            <h4 class="font-medium">Favorite Cheese</h4>
                            <p class="text-gray-500 text-sm">Crust: Stuffed Crust Soils</p>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">$8.75</p>
                            <div class="flex items-center justify-end space-x-2 mt-1">
                                <button class="text-gray-500">-</button>
                                <span>1</span>
                                <button class="text-gray-500">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer (Totals & Button) -->
            <div class="p-6">
                <div class="mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Items</span>
                        <span>$28.67</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Tax (10%)</span>
                        <span>$2.86</span>
                    </div>
                    <div class="flex justify-between font-bold text-lg">
                        <span>Total</span>
                        <span>$31.53</span>
                    </div>
                </div>
                
                <button class="w-full bg-primary text-white py-3 rounded-lg font-medium hover:bg-opacity-90 transition-colors">
                    Print Bills
                </button>
            </div>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const menuBackdrop = document.getElementById('menu-backdrop');

        const cartToggle = document.getElementById('cart-toggle');
        const orderSummary = document.getElementById('order-summary');
        const cartBackdrop = document.getElementById('cart-backdrop');

        function toggleMenu() {
            sidebar.classList.toggle('-translate-x-full');
            menuBackdrop.classList.toggle('hidden');
        }

        function toggleCart() {
            orderSummary.classList.toggle('translate-x-full');
            cartBackdrop.classList.toggle('hidden');
        }

        menuToggle.addEventListener('click', toggleMenu);
        menuBackdrop.addEventListener('click', toggleMenu);

        cartToggle.addEventListener('click', toggleCart);
        cartBackdrop.addEventListener('click', toggleCart);
    </script>
</body>
</html>