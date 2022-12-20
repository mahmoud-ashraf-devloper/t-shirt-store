@extends('store.layouts.base')
@section('content')
    <main>
        <!-- slider start -->
        <section class="bg-slate-50">
            <div class="w-full">
                <div class="banner-slider owl-carousel owl-theme">
                    <div class="relative">
                        <img src="{{ asset('site-assets/images/banner.jpg') }}" alt=""
                            class="w-full min-h-[40vh] md:min-h-[70vh] object-cover">
                        <!-- absolute texts -->
                        <div class="bg-black absolute inset-0 opacity-10"></div>
                        <div class="absolute md:top-1/4 top-1/4 2xl:left-1/3 md:left-[28%] left-2 z-10 w-full md:w-1/2">
                            <h2 class="text-navy text-2xl md:text-5xl font-bold mb-5">20% Off For Your First <br>
                                Shopping</h2>
                            <p class="text-slate-700 mb-6 hidden md:block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, voluptatum sed cumque,
                                minus corporis eveniet nulla illo ut blanditiis eius quos.
                            </p>
                            <a href="./shop.html" class="bg-navy text-white font-medium px-3 py-2 rounded-md">Visit
                                Collections</a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('site-assets/images/banner.jpg') }}" alt=""
                            class="w-full min-h-[40vh] md:min-h-[70vh] object-cover">
                        <!-- absolute texts -->
                        <div class="bg-black absolute inset-0 opacity-10"></div>
                        <div class="absolute md:top-1/4 top-1/4 2xl:left-1/3 md:left-[28%] left-2 z-10 w-full md:w-1/2">
                            <h2 class="text-navy text-2xl md:text-5xl font-bold mb-5">20% Off For Your First <br>
                                Shopping</h2>
                            <p class="text-slate-700 mb-6 hidden md:block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, voluptatum sed cumque,
                                minus corporis eveniet nulla illo ut blanditiis eius quos.
                            </p>
                            <a href="./shop.html" class="bg-navy text-white font-medium px-3 py-2 rounded-md">Visit
                                Collections</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- slider end -->

        <!-- flash deal slider start -->
        <section class="bg-slate-50 pt-6 md:pt-16 pb-2 px-3 md:px-1">
            <div class="container max-w-6xl mx-auto">
                <div class="flex justify-between mb-4">
                    <div>
                        <h2 class="flex items-center text-slate-700 font-semibold text-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-navy mr-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                    clip-rule="evenodd" />
                            </svg>
                            Flash Deals
                        </h2>
                    </div>
                    <div>
                        <a href="./shop.html" class="flex items-center text-slate-500">
                            View all
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- slider start -->
                <div class="flash-deal-slider owl-carousel owl-theme">
                    <div class="relative bg-white rounded-lg border border-slate-200 shadow">
                        <a href="./product-details.html">
                            <img src="{{ asset('site-assets/images/flash-2.webp') }}" class="w-full mb-3" alt="">
                        </a>
                        <div class="px-4 py-4">
                            <h5 class="text-slate-700 font-medium mb-2">
                                <a href="#">Smart watch Black</a>
                            </h5>
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <div class="flex justify-between">
                                <h6 class="font-medium text-navy text-base">
                                    $110.00
                                    <span class="text-slate-700 line-through">250.00</span>
                                </h6>
                                <button class="text-navy rounded-md border border-navy p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- discount label -->
                        <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">50% off</p>
                    </div>
                    <div class="relative bg-white rounded-lg border border-slate-200 shadow">
                        <a href="./product-details.html">
                            <img src="{{ asset('site-assets/images/flash-3.webp') }}" class="w-full mb-3" alt="">
                        </a>
                        <div class="px-4 py-4">
                            <h5 class="text-slate-700 font-medium mb-2">
                                <a href="#">Smart watch Black</a>
                            </h5>
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <div class="flex justify-between">
                                <h6 class="font-medium text-navy text-base">
                                    $110.00
                                    <span class="text-slate-700 line-through">250.00</span>
                                </h6>
                                <button class="text-navy rounded-md border border-navy p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- discount label -->
                        <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">50% off</p>
                    </div>
                    <div class="relative bg-white rounded-lg border border-slate-200 shadow">
                        <a href="./product-details.html">
                            <img src="{{ asset('site-assets/images/flash-2.webp') }}" class="w-full mb-3" alt="">
                        </a>
                        <div class="px-4 py-4">
                            <h5 class="text-slate-700 font-medium mb-2">
                                <a href="#">Smart watch Black</a>
                            </h5>
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <div class="flex justify-between">
                                <h6 class="font-medium text-navy text-base">
                                    $110.00
                                    <span class="text-slate-700 line-through">250.00</span>
                                </h6>
                                <button class="text-navy rounded-md border border-navy p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- discount label -->
                        <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">50% off</p>
                    </div>
                    <div class="relative bg-white rounded-lg border border-slate-200 shadow">
                        <a href="./product-details.html">
                            <img src="{{ asset('site-assets/images/flash-3.webp') }}" class="w-full mb-3" alt="">
                        </a>
                        <div class="px-4 py-4">
                            <h5 class="text-slate-700 font-medium mb-2">
                                <a href="#">Smart watch Black</a>
                            </h5>
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <div class="flex justify-between">
                                <h6 class="font-medium text-navy text-base">
                                    $110.00
                                    <span class="text-slate-700 line-through">250.00</span>
                                </h6>
                                <button class="text-navy rounded-md border border-navy p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- discount label -->
                        <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">50% off</p>
                    </div>
                    <div class="relative bg-white rounded-lg border border-slate-200 shadow">
                        <a href="./product-details.html">
                            <img src="{{ asset('site-assets/images/flash-2.webp') }}" class="w-full mb-3" alt="">
                        </a>
                        <div class="px-4 py-4">
                            <h5 class="text-slate-700 font-medium mb-2">
                                <a href="#">Smart watch Black</a>
                            </h5>
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <div class="flex justify-between">
                                <h6 class="font-medium text-navy text-base">
                                    $110.00
                                    <span class="text-slate-700 line-through">250.00</span>
                                </h6>
                                <button class="text-navy rounded-md border border-navy p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- discount label -->
                        <p class="bg-navy text-xs py-1 px-3 rounded-2xl absolute top-2 left-2 text-white">50% off</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- flash deal slider end -->

        <!-- top categories start -->
        <section class="bg-slate-50 pt-6 md:pt-16 pb-2 px-3 md:px-1">
            <div class="container max-w-6xl mx-auto">
                <div class="flex justify-between mb-4">
                    <div>
                        <h2 class="flex items-center text-slate-700 font-semibold text-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-navy mr-3"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
                            Top Categories
                        </h2>
                    </div>
                    <div>
                        <a href="./shop.html" class="flex items-center text-slate-500">
                            View all
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- slider start -->
                <div class="top-categories-slider owl-carousel owl-theme">
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <a href="./shop.html">
                            <div class="relative">
                                <img src="{{ asset('site-assets/images/category-banner/cat-1.jpg') }}" alt=""
                                    class="w-full object-cover rounded-lg">
                                <div
                                    class="absolute top-0 bottom-0 left-0 right-0 p-4 hover:bg-black/30 transition ease-in-out delay-250 rounded-lg">
                                    <div class="flex justify-between">
                                        <button class="text-xs px-3 py-1 bg-navy text-white rounded-2xl">Watch</button>
                                        <button class="text-xs px-3 py-1 bg-slate-200 text-navy rounded-2xl">3k orders this
                                            week</button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <a href="./shop.html">
                            <div class="relative">
                                <img src="{{ asset('site-assets/images/category-banner/cat-2.jpg') }}" alt=""
                                    class="w-full object-cover rounded-lg">
                                <div
                                    class="absolute top-0 bottom-0 left-0 right-0 p-4 hover:bg-black/30 transition ease-in-out delay-250 rounded-lg">
                                    <div class="flex justify-between">
                                        <button class="text-xs px-3 py-1 bg-navy text-white rounded-2xl">Watch</button>
                                        <button class="text-xs px-3 py-1 bg-slate-200 text-navy rounded-2xl">3k orders this
                                            week</button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <a href="./shop.html">
                            <div class="relative">
                                <img src="{{ asset('site-assets/images/category-banner/cat-3.jpg') }}" alt=""
                                    class="w-full object-cover rounded-lg">
                                <div
                                    class="absolute top-0 bottom-0 left-0 right-0 p-4 hover:bg-black/30 transition ease-in-out delay-250 rounded-lg">
                                    <div class="flex justify-between">
                                        <button class="text-xs px-3 py-1 bg-navy text-white rounded-2xl">Watch</button>
                                        <button class="text-xs px-3 py-1 bg-slate-200 text-navy rounded-2xl">3k orders this
                                            week</button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <a href="./shop.html">
                            <div class="relative">
                                <img src="{{ asset('site-assets/images/category-banner/cat-1.jpg') }}" alt=""
                                    class="w-full object-cover rounded-lg">
                                <div
                                    class="absolute top-0 bottom-0 left-0 right-0 p-4 hover:bg-black/30 transition ease-in-out delay-250 rounded-lg">
                                    <div class="flex justify-between">
                                        <button class="text-xs px-3 py-1 bg-navy text-white rounded-2xl">Watch</button>
                                        <button class="text-xs px-3 py-1 bg-slate-200 text-navy rounded-2xl">3k orders this
                                            week</button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- top categories end -->

        <!-- top rating start -->
        <section class="bg-slate-50 pt-6 md:pt-16 pb-2 px-3 md:px-1">
            <div class="container max-w-6xl mx-auto">
                <div class="flex flex-wrap mx-[-8px]">
                    <!-- top ratings start -->
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-4">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <h2 class="flex items-center text-slate-700 font-semibold text-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-navy mr-3"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Top Ratings
                                </h2>
                            </div>
                            <div>
                                <a href="./shop.html" class="flex items-center text-slate-500">
                                    View all
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex flex-wrap mx-[-8px]">
                                <div class="w-1/2 md:w-1/4 text-center px-2 mb-4 md:mb-0">
                                    <a href="./shop.html">
                                        <img src="{{ asset('site-assets/images/products/top-rating-1.webp') }}"
                                            class="mb-4 rounded-lg w-full">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                        <h5 class="text-base font-semibold">Camera</h5>
                                        <h5 class="text-base font-semibold text-navy">$3,300</h5>
                                    </a>
                                </div>
                                <div class="w-1/2 md:w-1/4 text-center px-2 mb-4 md:mb-4">
                                    <a href="./shop.html">
                                        <img src="{{ asset('site-assets/images/products/top-rating-2.webp') }}"
                                            class="mb-4 rounded-lg w-full">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                        <h5 class="text-base font-semibold">Camera</h5>
                                        <h5 class="text-base font-semibold text-navy">$3,300</h5>
                                    </a>
                                </div>
                                <div class="w-1/2 md:w-1/4 text-center px-2">
                                    <a href="./shop.html">
                                        <img src="{{ asset('site-assets/images/products/top-rating-4.webp') }}"
                                            class="mb-4 rounded-lg w-full">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                        <h5 class="text-base font-semibold">Camera</h5>
                                        <h5 class="text-base font-semibold text-navy">$3,300</h5>
                                    </a>
                                </div>
                                <div class="w-1/2 md:w-1/4 text-center px-2">
                                    <a href="./shop.html">
                                        <img src="{{ asset('site-assets/images/products/top-rating-3.webp') }}"
                                            class="mb-4 rounded-lg w-full">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-navy"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-navy"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                        <h5 class="text-base font-semibold">Camera</h5>
                                        <h5 class="text-base font-semibold text-navy">$3,300</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- featured brands start -->
                    <div class="w-full md:w-1/2 px-2">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <h2 class="flex items-center text-slate-700 font-semibold text-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-navy mr-3"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    Featured Brands
                                </h2>
                            </div>
                            <div>
                                <a href="./shop.html" class="flex items-center text-slate-500">
                                    View all
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex mx-[-8px]">
                                <div class="w-full md:w-1/2 px-2">
                                    <a href="./shop.html">
                                        <div class="relative">
                                            <img src="{{ asset('site-assets/images/brands/1.webp') }}"
                                                class="mb-1 rounded-lg w-full">
                                            <div
                                                class="absolute top-0 bottom-0 left-0 right-0 p-4 hover:bg-black/30 transition ease-in-out delay-250 rounded-lg">
                                            </div>
                                        </div>
                                        <h5 class="text-base font-semibold">London Britches</h5>
                                    </a>
                                </div>
                                <div class="w-full md:w-1/2 px-2">
                                    <a href="./shop.html">
                                        <div class="relative">
                                            <img src="{{ asset('site-assets/images/brands/2.webp') }}"
                                                class="mb-1 rounded-lg w-full">
                                            <div
                                                class="absolute top-0 bottom-0 left-0 right-0 p-4 hover:bg-black/30 transition ease-in-out delay-250 rounded-lg">
                                            </div>
                                        </div>
                                        <h5 class="text-base font-semibold">Jim & Jago</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top ratings end -->

        <!-- new arrivals start -->
        <section class="bg-slate-50 pt-6 md:pt-16 pb-2 px-3 md:px-1">
            <div class="container max-w-6xl mx-auto">
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h2 class="flex items-center text-slate-700 font-semibold text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-navy mr-3"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            New Arrivals
                        </h2>
                    </div>
                    <div>
                        <a href="./shop.html" class="flex items-center text-slate-500">
                            View all
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-4 shadow-sm">
                    <div class="flex flex-wrap mx-[-8px]">
                        <div class="w-1/2 md:w-2/12 text-center px-2 mb-4 md:mb-0">
                            <a href="./product-details.html">
                                <img src="{{ asset('site-assets/images/products/top-rating-1.webp') }}"
                                    class="mb-4 rounded-lg w-full">
                                <h5 class="text-base font-semibold">Mi Note 9 Pro</h5>
                                <h5 class="text-base font-semibold text-navy">$3,300</h5>
                            </a>
                        </div>
                        <div class="w-1/2 md:w-2/12 text-center px-2 mb-4 md:mb-0">
                            <a href="./product-details.html">
                                <img src="{{ asset('site-assets/images/products/top-rating-2.webp') }}"
                                    class="mb-4 rounded-lg w-full">
                                <h5 class="text-base font-semibold">Omega Watch</h5>
                                <h5 class="text-base font-semibold text-navy">$3,300</h5>
                            </a>
                        </div>
                        <div class="w-1/2 md:w-2/12 text-center px-2">
                            <a href="./product-details.html">
                                <img src="{{ asset('site-assets/images/products/top-rating-4.webp') }}"
                                    class="mb-4 rounded-lg w-full">
                                <h5 class="text-base font-semibold">Canon Camera</h5>
                                <h5 class="text-base font-semibold text-navy">$3,300</h5>
                            </a>
                        </div>
                        <div class="w-1/2 md:w-2/12 text-center px-2">
                            <a href="./product-details.html">
                                <img src="{{ asset('site-assets/images/products/top-rating-3.webp') }}"
                                    class="mb-4 rounded-lg w-full">
                                <h5 class="text-base font-semibold">Adidas Shoes</h5>
                                <h5 class="text-base font-semibold text-navy">$3,300</h5>
                            </a>
                        </div>
                        <div class="w-1/2 md:w-2/12 text-center px-2 mb-4 md:mb-0">
                            <a href="./product-details.html">
                                <img src="{{ asset('site-assets/images/products/top-rating-1.webp') }}"
                                    class="mb-4 rounded-lg w-full">
                                <h5 class="text-base font-semibold">Mi Note 9 Pro</h5>
                                <h5 class="text-base font-semibold text-navy">$3,300</h5>
                            </a>
                        </div>
                        <div class="w-1/2 md:w-2/12 text-center px-2 mb-4 md:mb-0">
                            <a href="./product-details.html">
                                <img src="{{ asset('site-assets/images/products/top-rating-2.webp') }}"
                                    class="mb-4 rounded-lg w-full">
                                <h5 class="text-base font-semibold">Omega Watch</h5>
                                <h5 class="text-base font-semibold text-navy">$3,300</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- new arrivals end -->

        <!-- features start -->
        <div class="bg-slate-50 pt-6 md:pt-16 pb-6 md:pb-14 px-3 md:px-1">
            <div class="container max-w-6xl mx-auto">
                <div class="flex flex-wrap mx-[-8px]">
                    <div class="w-1/2 md:w-1/4 px-2 mb-4 md:mb-0">
                        <div class="rounded-md px-8 py-10 text-center bg-white shadow-md hover:shadow-lg transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 rounded-full bg-slate-100 text-slate-700 p-2 mx-auto mb-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                            </svg>
                            <h4 class="font-semibold text-xl mb-3">Worldwide Delivery</h4>
                            <p class="text-base text-slate-500">
                                We offer competitive prices on our 100 million plus product any range.
                            </p>
                        </div>
                    </div>
                    <div class="w-1/2 md:w-1/4 px-2 mb-4 md:mb-0">
                        <div class="rounded-md px-8 py-10 text-center bg-white shadow-md hover:shadow-lg transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 rounded-full bg-slate-100 text-slate-700 p-2 mx-auto mb-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <h4 class="font-semibold text-xl mb-3">Safe Payment</h4>
                            <p class="text-base text-slate-500">
                                We offer competitive prices on our 100 million plus product any range.
                            </p>
                        </div>
                    </div>
                    <div class="w-1/2 md:w-1/4 px-2 mb-4 md:mb-0">
                        <div class="rounded-md px-8 py-10 text-center bg-white shadow-md hover:shadow-lg transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 rounded-full bg-slate-100 text-slate-700 p-2 mx-auto mb-4"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <h4 class="font-semibold text-xl mb-3">Shop With Confidence</h4>
                            <p class="text-base text-slate-500">
                                We offer competitive prices on our 100 million plus product any range.
                            </p>
                        </div>
                    </div>
                    <div class="w-1/2 md:w-1/4 px-2 mb-4 md:mb-0">
                        <div class="rounded-md px-8 py-10 text-center bg-white shadow-md hover:shadow-lg transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 rounded-full bg-slate-100 text-slate-700 p-2 mx-auto mb-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h4 class="font-semibold text-xl mb-3">24/7 Support</h4>
                            <p class="text-base text-slate-500">
                                We offer competitive prices on our 100 million plus product any range.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features end -->

    </main>
@endsection
