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