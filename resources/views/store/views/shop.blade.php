@extends('store.layouts.base')
@section('content')
    <main>
        <!-- category heading start -->
        <section class="bg-slate-50 pt-4 md:pt-12 pb-2 px-3 md:px-1">
            <div class="container max-w-6xl mx-auto">
                <div class="flex flex-wrap items-center md:justify-between bg-white rounded-lg shadow-sm p-5">
                    <div class="mb-4 md:mb-0">
                        <h5 class="text-lg font-semibold">Categories: Mobile Phone</h5>
                        <p class="text-slate-500">48 results found</p>
                    </div>
                    <div class="text-center">
                        <label for="sort" class="w-1/2 text-slate-500 pr-3">Sort by:</label>
                        <select id="sort" name="sort"
                            class="py-2 px-3 pr-8 text-slate-500 border border-gray-200 rounded-md focus:ring-0">
                            <option>Price low to high</option>
                            <option>Price low to high</option>
                            <option>New arrival</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <!-- category heading end -->

        <!-- products start -->
        <section class="bg-slate-50 pt-4 md:pt-12 pb-4 md:pb-8 px-3 md:px-1">
            <div class="container max-w-6xl mx-auto">
                <div class="flex flex-wrap -mx-2]">
                    <!-- filter -->
                    <div class="w-full md:w-3/12 md:px-2 mb-4 md:mb-0">
                        <div class="bg-white rounded-lg shadow-sm p-5">
                            <h6 class="text-base font-medium mb-3">Categories</h6>
                            <ul>
                                <li class="mb-2">
                                    <a href="#" class="text-slate-500 flex items-center" id="category-toggle-btn">
                                        Shirts
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-auto" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <!-- sub category -->
                                    <ul class="ml-5 hidden transition-all" id="toggle-category">
                                        <li class="mb-2">
                                            <a href="#" class="text-slate-500">Men's Shirts</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#" class="text-slate-500">Women's Shirts</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#" class="text-slate-500">Export Shirts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-slate-500">Ladies</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-slate-500">Fashion and Beauty</a>
                                </li>
                            </ul>

                            <hr class="my-6">

                            <h6 class="text-base font-medium mb-3">Price Range</h6>
                            <div class="flex items-center">
                                <input type="text" class="w-5/12 focus:ring-0 rounded-md border-gray-200 text-slate-500"
                                    value="0">
                                <p class="px-3 text-slate-500">-</p>
                                <input type="text" class="w-5/12 focus:ring-0 rounded-md border-gray-200 text-slate-500"
                                    value="5000">
                            </div>

                            <hr class="my-6">

                            <h6 class="text-base font-medium mb-3">Brands</h6>
                            <div class="flex items-center mb-1">
                                <input type="checkbox" name="" id="brand1" class="border-gray-300 rounded mr-3">
                                <label for="brand1" class="text-slate-700">Top Ten</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input type="checkbox" name="" id="brand2" class="border-gray-300 rounded mr-3">
                                <label for="brand2" class="text-slate-700">Le Reve</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input type="checkbox" name="" id="brand3" class="border-gray-300 rounded mr-3">
                                <label for="brand3" class="text-slate-700">Sailor</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input type="checkbox" name="" id="brand4" class="border-gray-300 rounded mr-3">
                                <label for="brand4" class="text-slate-700">Aarong</label>
                            </div>

                            <hr class="my-6">

                            <div class="flex items-center mb-1">
                                <input type="checkbox" name="" id="brand5" class="border-gray-300 rounded mr-3">
                                <label for="brand5" class="text-slate-700">On Sale</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input type="checkbox" name="" id="brand6" class="border-gray-300 rounded mr-3">
                                <label for="brand6" class="text-slate-700">In Stock</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input type="checkbox" name="" id="brand7"
                                    class="border-gray-300 rounded mr-3">
                                <label for="brand7" class="text-slate-700">Featured</label>
                            </div>
                        </div>
                    </div>
                    <!-- products -->
                    <div class="w-full md:w-9/12 md:px-2">
                        <div class="flex flex-wrap md:-mx-2">
                            <!-- product item -->
                            <div class="w-full md:w-4/12 md:px-2 mb-4">
                                <div
                                    class="relative bg-white rounded-lg border border-slate-200 shadow-sm hover:shadow transition-all">
                                    <a href="./product-details.html">
                                        <img src="{{ asset('site-assets/images/flash-2.webp') }}" class="w-full mb-3" alt="">
                                    </a>
                                    <div class="px-4 py-4">
                                        <h5 class="text-slate-700 font-medium mb-2">
                                            <a href="./product-details.html">hi watch Black</a>
                                        </h5>
                                        <div class="flex items-center mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex justify-between">
                                            <h6 class="font-medium text-navy text-base">
                                                $110.00
                                                <span class="text-slate-500 line-through">250.00</span>
                                            </h6>
                                            <button onclick="addToCart()" class="group hover:text-white hover:bg-navy flex justify-center items-center text-navy rounded-md border border-navy p-1">
                                                <span class="pr-1 ">Add to Cart</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class=" group-hover:fill-white h-4 w-4 text-navy"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- discount label -->
                                    <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">
                                        50% off</p>
                                </div>
                            </div>

                            <!-- product item -->
                            <div class="w-full md:w-4/12 md:px-2 mb-4">
                                <div
                                    class="relative bg-white rounded-lg border border-slate-200 shadow-sm hover:shadow transition-all">
                                    <a href="./product-details.html">
                                        <img src="{{ asset('site-assets/images/flash-3.webp') }}" class="w-full mb-3" alt="">
                                    </a>
                                    <div class="px-4 py-4">
                                        <h5 class="text-slate-700 font-medium mb-2">
                                            <a href="./product-details.html">Smart watch Black</a>
                                        </h5>
                                        <div class="flex items-center mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex justify-between">
                                            <h6 class="font-medium text-navy text-base">
                                                $110.00
                                                <span class="text-slate-500 line-through">250.00</span>
                                            </h6>
                                            <button class="text-navy rounded-md border border-navy p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- discount label -->
                                    <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">
                                        50% off</p>
                                </div>
                            </div>

                            <!-- product item -->
                            <div class="w-full md:w-4/12 md:px-2 mb-4">
                                <div
                                    class="relative bg-white rounded-lg border border-slate-200 shadow-sm hover:shadow transition-all">
                                    <a href="./product-details.html">
                                        <img src="{{ asset('site-assets/images/flash-2.webp') }}" class="w-full mb-3" alt="">
                                    </a>
                                    <div class="px-4 py-4">
                                        <h5 class="text-slate-700 font-medium mb-2">
                                            <a href="./product-details.html">Smart watch Black</a>
                                        </h5>
                                        <div class="flex items-center mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex justify-between">
                                            <h6 class="font-medium text-navy text-base">
                                                $110.00
                                                <span class="text-slate-500 line-through">250.00</span>
                                            </h6>
                                            <button class="text-navy rounded-md border border-navy p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- discount label -->
                                    <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">
                                        50% off</p>
                                </div>
                            </div>

                            <!-- product item -->
                            <div class="w-full md:w-4/12 md:px-2 mb-4">
                                <div
                                    class="relative bg-white rounded-lg border border-slate-200 shadow-sm hover:shadow transition-all">
                                    <a href="./product-details.html">
                                        <img src="{{ asset('site-assets/images/flash-3.webp') }}" class="w-full mb-3" alt="">
                                    </a>
                                    <div class="px-4 py-4">
                                        <h5 class="text-slate-700 font-medium mb-2">
                                            <a href="./product-details.html">Smart watch Black</a>
                                        </h5>
                                        <div class="flex items-center mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex justify-between">
                                            <h6 class="font-medium text-navy text-base">
                                                $110.00
                                                <span class="text-slate-500 line-through">250.00</span>
                                            </h6>
                                            <button class="text-navy rounded-md border border-navy p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- discount label -->
                                    <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">
                                        50% off</p>
                                </div>
                            </div>

                            <!-- product item -->
                            <div class="w-full md:w-4/12 md:px-2 mb-4">
                                <div
                                    class="relative bg-white rounded-lg border border-slate-200 shadow-sm hover:shadow transition-all">
                                    <a href="./product-details.html">
                                        <img src="{{ asset('site-assets/images/flash-2.webp') }}" class="w-full mb-3" alt="">
                                    </a>
                                    <div class="px-4 py-4">
                                        <h5 class="text-slate-700 font-medium mb-2">
                                            <a href="./product-details.html">Smart watch Black</a>
                                        </h5>
                                        <div class="flex items-center mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex justify-between">
                                            <h6 class="font-medium text-navy text-base">
                                                $110.00
                                                <span class="text-slate-500 line-through">250.00</span>
                                            </h6>
                                            <button class="text-navy rounded-md border border-navy p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- discount label -->
                                    <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">
                                        50% off</p>
                                </div>
                            </div>

                            <!-- product item -->
                            <div class="w-full md:w-4/12 md:px-2 mb-4">
                                <div
                                    class="relative bg-white rounded-lg border border-slate-200 shadow-sm hover:shadow transition-all">
                                    <a href="./product-details.html">
                                        <img src="{{ asset('site-assets/images/flash-3.webp') }}" class="w-full mb-3" alt="">
                                    </a>
                                    <div class="px-4 py-4">
                                        <h5 class="text-slate-700 font-medium mb-2">
                                            <a href="./product-details.html">Smart watch Black</a>
                                        </h5>
                                        <div class="flex items-center mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex justify-between">
                                            <h6 class="font-medium text-navy text-base">
                                                $110.00
                                                <span class="text-slate-500 line-through">250.00</span>
                                            </h6>
                                            <button class="text-navy rounded-md border border-navy p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- discount label -->
                                    <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">
                                        50% off</p>
                                </div>
                            </div>
                        </div>

                        <!-- pagination start -->
                        <div class="px-4 py-3 flex items-center justify-between sm:px-6">
                            <div class="flex-1 flex justify-between sm:hidden">
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    Previous </a>
                                <a href="#"
                                    class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    Next </a>
                            </div>
                            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm text-gray-700">
                                        Showing
                                        <span class="font-medium">1</span>
                                        to
                                        <span class="font-medium">8</span>
                                        of
                                        <span class="font-medium">97</span>
                                        results
                                    </p>
                                </div>
                                <div>
                                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                        aria-label="Pagination">
                                        <a href="#"
                                            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Previous</span>
                                            <!-- Heroicon name: solid/chevron-left -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                                        <a href="#" aria-current="page"
                                            class="z-10 bg-indigo-50 border-navy text-navy relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            1 </a>
                                        <a href="#"
                                            class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            2 </a>
                                        <a href="#"
                                            class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                            3 </a>
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                            ... </span>
                                        <a href="#"
                                            class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                            8 </a>
                                        <a href="#"
                                            class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            9 </a>
                                        <a href="#"
                                            class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            10 </a>
                                        <a href="#"
                                            class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Next</span>
                                            <!-- Heroicon name: solid/chevron-right -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cproducts end -->

    </main>
@endsection
