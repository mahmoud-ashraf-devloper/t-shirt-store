<header>
    <!-- header top start -->
    <section class="bg-navy py-2 px-3 md:px-1">
        <div class="container max-w-7xl mx-auto">
            <div class="flex justify-between items-center">
                <div>
                    <ul class="list-none flex">
                    
                        <li class="md:hidden mr-3">
                            <a href="/">
                                <img src="{{ asset('site-assets/images/light-logo.png') }}" class="max-h-6 text-white" alt="">
                            </a>
                        </li>
                        <li class="hidden md:block mr-3">
                            <a href="#" class="flex items-center justify-center text-white text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                +8801679354488
                            </a>
                        </li>
                        <li class="hidden md:block">
                            <a href="#" class="flex items-center justify-center text-white text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Support@ecommerce.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="list-none flex md:justify-end space-x-6">
                        <li class="hidden md:block">
                            <a href="#"
                                class="flex items-center justify-center text-white text-sm hover:text-navy transition">
                                Theme FAQ's
                            </a>
                        </li>
                        <li class="hidden md:block">
                            <a href="#"
                                class="flex items-center justify-center text-white text-sm hover:text-navy transition">
                                Need Help?
                            </a>
                        </li>
                        

                        <li class="relative">
                            <a href="#" class="flex items-center justify-center text-white text-sm transition"
                                id="dropdown">
                                <img src="{{ asset('site-assets/images/flags/usa.png') }}" class="mr-2 rounded-md"> USD
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>

                            <!-- dropdown -->
                            <div id="dropdownArea" class="hidden">
                                <ul class="absolute top-[145%] right-0 w-48 rounded-lg shadow-lg bg-white py-2 z-10">
                                    <li>
                                        <a href="#"
                                            class="flex w-full px-3 py-2 text-sm hover:text-navy hover:bg-neutral-100">
                                            <img src="{{ asset('site-assets/images/flags/usa.png') }}" class="mr-2">
                                            USD
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex w-full px-3 py-2 text-sm hover:text-navy hover:bg-neutral-100">
                                            <img src="{{ asset('site-assets/images/flags/bd.png') }}" class="mr-2">
                                            BDT
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex w-full px-3 py-2 text-sm hover:text-navy hover:bg-neutral-100">
                                            <img src="{{ asset('site-assets/images/flags/in.png') }}" class="mr-2">
                                            INR
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- header top end -->

    <!-- header middle start -->
    <section class="py-4 px-1">
        <div class="container max-w-7xl mx-auto">
            <div class="flex justify-center items-center">
                <div class="w-100 md:w-1/4 hidden md:block">
                    <a href="/"><img src="{{ asset('site-assets/images/logo.png') }}" alt=""
                            class="max-h-8"></a>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <!-- search form -->
                    <div class="relative rounded-full">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                        </div>
                        <input type="text" name="search" id="search"
                            class="focus:ring-0 focus:border-navy block w-full pl-11 pr-16 py-2 sm:text-base border-gray-300 rounded-full"
                            placeholder="Search and hit enter...">
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <label for="currency" class="sr-only">All Categories</label>
                            <select id="currency" name="currency"
                                class="focus:ring-0 focus:border-navy h-full py-0 pl-2 pr-7 border-transparent border-l-gray-300 rounded-l-none bg-transparent text-gray-500 sm:text-sm rounded-full">
                                <option>All Categories</option>
                                <option>Car</option>
                                <option>Ladies</option>
                                <option>Getns</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="w-100 md:w-1/4 hidden md:block">
                    <ul class="list-none flex md:justify-end pr-4">
                        <li class="mr-4">
                            <a href="./login.html">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 rounded-full bg-slate-100 text-slate-700 p-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </a>
                        </li>
                        <li class="relative">
                            <button onclick="toggleShoppingCart()">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 rounded-full bg-slate-100 text-slate-700 p-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </button>
                            <!-- cart value -->
                            <span id="cart-items-count-top-nav"
                                class="absolute rounded-full px-2 py-1 -top-2 -right-3 text-xs bg-navy text-white">5</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- header middle end -->

    <!-- header bottom start -->
    <section class="py-3 px-1 shadow-md hidden lg:block">
        <div class="container max-w-7xl mx-auto">
            <div class="flex items-center">
                <div class="md:w-2/12">
                    <!-- category dropdown button -->
                    <div class="relative bg-slate-100 px-6 py-2 rounded-md">
                        <a href="#" class="flex items-center space-x-2" id="categoryDropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <h5 class="font-medium text-slate-500">Categories</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <!-- dropdown menu -->
                        <div class="absolute left-0 top-[105%] w-72 rounded-md shadow-lg bg-white focus:outline-none z-10 hidden"
                            id="CategoryDropdownArea">
                            <div class="py-1" role="none">
                                <a href="./shop.html" class="flex text-gray-700 px-4 py-2 text-base hover:bg-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                    </svg>
                                    Fashion
                                </a>
                                <a href="./shop.html" class="flex text-gray-700 px-4 py-2 text-base hover:bg-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                    </svg>
                                    Electronics
                                </a>
                                <a href="./shop.html" class="flex text-gray-700 px-4 py-2 text-base hover:bg-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                    </svg>
                                    Home & Garden
                                </a>
                                <a href="./shop.html" class="flex text-gray-700 px-4 py-2 text-base hover:bg-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                    </svg>
                                    Gifts
                                </a>
                                <a href="./shop.html" class="flex text-gray-700 px-4 py-2 text-base hover:bg-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                    </svg>
                                    Health & Beauty
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-10/12">
                    <!-- nav items -->
                    <ul class="flex justify-end">
                        <li>
                            <a href="./index.html" class="ml-8 text-slate-700">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="shop.html" class="ml-8 text-slate-700">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="product-details.html" class="ml-8 text-slate-700">
                                Product Details
                            </a>
                        </li>
                        <li>
                            <a href="about.html" class="ml-8 text-slate-700">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="contact.html" class="ml-8 text-slate-700">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="login.html" class="ml-8 text-slate-700">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- header bottom end -->
</header>

<!-- mobile bottom bar start -->
<section class="fixed bottom-0 left-0 right-0 md:hidden bg-white shadow p-3 z-50">
    <ul class="flex items-center justify-around">
        <li>
            <a href="./index.html" class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="text-sm">Home</span>
            </a>
        </li>
        <li>
            <a href="./shop.html" class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                    </path>
                </svg>
                <span class="text-sm">Category</span>
            </a>
        </li>
        <li class="relative">
            <button onclick="toggleShoppingCart()" class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span class="text-sm">Cart</span>
            </button>
            <!-- cart value -->
            <span id="cart-items-count-bottom-nav" class="absolute rounded-full px-1 -top-2 -right-1 text-xs bg-navy text-white"></span>
        </li>
        <li>
            <a href="./login.html" class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span class="text-sm">Account</span>
            </a>
        </li>
    </ul>
</section>
<!-- mobile bottom bar end -->
