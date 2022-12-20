@extends('store.layouts.base')
@section('content')
    {{-- timeline --}}
    <div class="md:mt-16 pl-6 md:pl-28 my-10 w-full">
        <div class="">
            <div class="grid grid-cols-4 ">
                <div class="col-span-1 ">
                    <div class="md:w-full  md:mr-10 md:mx-auto relative h-full">
                        <div class="md:w-full md:h-full flex  items-center justify-center">
                            <div class="w-full h-2 bg-navy border-2 border-navy pointer-events-none">
                            </div>
                        </div>
                        <div
                            class="flex justify-center items-center rounded-full overflow-hidden w-8 h-8 bg-navy absolute top-1/2 md:-mt-4 -mt-3  border-2 border-navy shadow text-center">
                            <svg class="fill-white " xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M11.707,15.707C11.512,15.902,11.256,16,11,16s-0.512-0.098-0.707-0.293l-4-4c-0.391-0.391-0.391-1.023,0-1.414 s1.023-0.391,1.414,0L11,13.586l8.35-8.35C17.523,3.251,14.911,2,12,2C6.477,2,2,6.477,2,12c0,5.523,4.477,10,10,10s10-4.477,10-10 c0-1.885-0.531-3.642-1.438-5.148L11.707,15.707z"/></svg>
                        </div>
                        <div
                            class="flex justify-center items-center bg-navy text-white border border-navy px-2 py-1 rounded-xl  shadow-md absolute z-[9] -right-10 -top-3  ">
                            <h3 class="font-semibold text-sm md:pr-2 sr-only md:not-sr-only">Cart</h3>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    class=" w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 ">
                    <div class="md:w-full  md:mr-10 md:mx-auto relative">
                        <div class="md:w-full md:h-full flex  items-center justify-center">
                            <div class="w-full h-1 bg-gray-300 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-gray-300 shadow text-center">
                            <i class="fas fa-check-circle text-white"></i>
                        </div>
                        <div
                            class="flex justify-center items-center bg-gray-300 text-navy border border-navy px-2 py-1 rounded-xl  shadow-md absolute z-[9] -right-10 -top-4  ">
                            <h3 class="font-semibold text-sm md:pr-2 sr-only md:not-sr-only">Checkout</h3>

                                <svg class=" w-5 h-7 rounded-full fill-navy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.3 488.3" xml:space="preserve"><path d="M454.3 79.25H33.9c-18.7 0-33.9 15.2-33.9 33.9v262c0 18.7 15.2 33.9 33.9 33.9h420.5c18.7 0 33.9-15.2 33.9-33.9v-262c0-18.7-15.3-33.9-34-33.9zm0 303.5H33.9c-4.2 0-7.6-3.4-7.6-7.6v-216.8H462v216.8c0 4.2-3.5 7.6-7.7 7.6zm-310.7-68.9c-4.9 6-11.3 10-18.8 12.1-3.3.9-4.7 2.6-4.6 6 .1 3.3 0 6.7 0 10 0 3-1.5 4.6-4.5 4.6-3.6.1-7.2.1-10.8 0-3.1-.1-4.6-1.8-4.7-4.9 0-2.4 0-4.9-.1-7.3-.1-5.4-.2-5.6-5.4-6.4-6.6-1-13.1-2.6-19.2-5.5-4.8-2.3-5.2-3.5-3.9-8.5 1-3.7 2-7.4 3.2-11.1 1.3-4.3 2.5-4.8 6.4-2.8 6.7 3.5 13.8 5.4 21.2 6.4 4.8.6 9.5.1 13.9-1.8 8.3-3.6 9.6-13.2 2.6-19-2.4-2-5.1-3.4-7.9-4.7-7.3-3.2-14.9-5.6-21.7-9.8-11.1-6.7-18.2-15.8-17.4-29.4.9-15.3 9.6-24.9 23.7-30 5.8-2.1 5.8-2 5.9-8.1v-6.2c.1-4.6.9-5.4 5.4-5.5h4.2c9.7 0 9.7 0 9.7 9.7 0 6.9 0 6.9 6.9 8 5.2.8 10.2 2.4 15.1 4.5 2.7 1.2 3.7 3 2.9 5.9-1.2 4.2-2.4 8.4-3.7 12.5-1.3 3.9-2.5 4.5-6.3 2.7-7.6-3.7-15.5-5.2-23.9-4.7-2.2.1-4.3.4-6.4 1.3-7.2 3.2-8.4 11.1-2.3 16.1 3.1 2.5 6.7 4.3 10.4 5.8 6.4 2.6 12.8 5.2 18.9 8.6 19.6 10.7 24.8 35 11.2 51.5zm259.7-117v16.2c0 2.7-2.2 4.8-4.8 4.8h-207c-2.7 0-4.8-2.2-4.8-4.8v-16.2c0-2.7 2.2-4.8 4.8-4.8h207c2.6 0 4.8 2.2 4.8 4.8zm-216.7 59.1v-16.2c0-2.7 2.2-4.8 4.8-4.8h118.9c2.7 0 4.8 2.2 4.8 4.8v16.2c0 2.7-2.2 4.8-4.8 4.8H191.5c-2.7.1-4.9-2.1-4.9-4.8zm213.9 36.7c.9 2 .7 4.3-.2 6.3-.2.6-.9 2.6-2.7 4.3-1.5 1.3-3.1 2.8-5.4 3.8-8.3 3.3-17.3 6.6-27.1 8.3-8.2 1.4-15.2-.8-20.3-6.2l-2.9 1.3c-4.4 1.9-8.6 3.6-12.6 5.7-4.9 2.6-9.7 5.3-14.5 8-3.7 2.1-7.5 4.2-11.2 6.2-3.2 1.7-6.6 3.1-10.1 4.1-4.9 1.4-9.9.1-13.1-3.3-2.4-2.5-3.5-6-3.3-9.6 0-.6.1-1.1.2-1.7-7.4 5.8-14.9 11.6-22.4 17.3-4.3 3.3-8.9 6.3-13.3 9.2-2.5 1.6-5.1 2.4-6.9 2.8-7.1 1.8-13.9-2.4-15.6-9.7-1.1-4.5.1-8.6.7-11 .3-1.2.7-2.5 1.1-3.7-5.3 6.8-10.5 13.8-15.7 20.7l-3.8 5.1c-1.6 2.1-2.9 4.1-3.9 5.9-.7 1.2-1.2 2.5-1.7 3.8l-.9 2-.2.6c-1.1 3.3-4.3 5.5-7.7 5.5-.6 0-1.1-.1-1.7-.2-4.2-.9-7.3-4.9-6.7-9.2.1-.7.2-1.3.3-1.8 1.3-5.5 3.9-10 6.4-14.2 12.3-20.3 23.3-36.2 34.7-50.2 3.7-4.6 7.8-8.7 11.8-12.7l.4-.4c2.1-2.2 5-3.8 8-4.6 4.5-1.3 9.2 0 12.1 3.2 2.3 2.5 3.3 5.9 3 9.4-.3 3.3-1 6.4-2 9.3-1.5 4.1-3 8.2-4.5 12.4-1.1 3-2.3 6-3.3 9 3.7-3.1 7.4-6.3 11.1-9.4 5.2-4.4 10.4-8.8 15.6-13.1 2.9-2.4 6-4.2 9-6l1.4-.9c2.9-1.7 6-1.7 7.3-1.7 3.2 0 6.3 1.3 8.5 3.6s3.3 5.4 3.1 8.6c-.2 2.8-.6 5.8-1.4 9.1l-.3 1.2c1.8-1.1 3.6-2.3 5.4-3.4 3.1-1.9 6.1-3.9 9.2-5.8 8.1-5 15.1-8.5 22.1-11 6.1-2.3 11.5-1.9 16.1.9 2.2 1.4 4.2 3.2 5.9 5.4.5.7.7.7 1.5.7.4 0 .8 0 1.2-.1 4.3-.7 8.6-2.4 13.2-4.1l1.9-.7c1-.4 2-.8 3-1.3 1.6-.7 3.1-1.4 4.8-1.9 2.2-.8 4.4-1.1 6.1-1.3.3 0 1.1-.1 1.4-.1 2.2 0 3.9.8 4.6 1.2 1.9.8 3.4 2.4 4.3 4.4z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 ">
                    <div class="md:w-full  md:mr-10 md:mx-auto relative">
                        <div class="md:w-full md:h-full flex  items-center justify-center">
                            <div class="w-full h-1 bg-gray-300 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-gray-300 shadow text-center">
                            <i class="fas fa-check-circle text-white"></i>
                        </div>
                        <div
                            class="flex justify-center items-center bg-gray-300 text-navy border border-navy px-2 py-1 rounded-xl  shadow-md absolute z-[9] -right-10 -top-4  ">
                            <h3 class="font-semibold text-sm md:pr-2 sr-only md:not-sr-only">Payment</h3>
                   
                                <svg class=" w-5 h-7 rounded-full fill-navy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.3 490.3" style="0 0 490.3 490.3" xml:space="preserve"><path d="M199.821 96.9c-10.2 0-18.4-8.3-18.4-18.4s8.3-18.4 18.4-18.4c10.2 0 18.4 8.3 18.4 18.4s-8.2 18.4-18.4 18.4zm0 11.8c36.7 0 66.5 29.8 66.5 66.5 0 20.3-9.2 38.5-23.5 50.7-6.4-3.1-13.6-4.9-21.6-4.9-1.7 0-3.5.1-4.9.2-3.9.3-17.3 2.5-27.2 16.9l-1.5 2.4c-30.9-5.7-54.3-32.8-54.3-65.3 0-36.7 29.8-66.5 66.5-66.5zm43.3 90.5h-13.1c-2.7 8.7-6.6 15.9-10.6 21.5 10.1-4.3 18.4-11.9 23.7-21.5zm-10.7-38.1c.7 4.4 1.2 9 1.2 14.1s-.4 9.7-1.2 14.1h14.9c1.3-4.5 2-9.2 2-14.1s-.7-9.6-2-14.1h-14.9zm-13-31.4c4.1 5.6 8 12.8 10.6 21.5h13.1c-5.3-9.5-13.6-17.1-23.7-21.5zm-14.6 21.5h14.7c-3.9-10.8-9.9-18.5-14.7-23.4v23.4zm0 38.1h17.5c.8-4.3 1.3-9 1.3-14.1s-.5-9.7-1.3-14.1h-17.5v28.2zm0 33.4c4.8-4.8 10.9-12.5 14.8-23.5h-14.8v23.5zm-37.6-33.4c-.7-4.4-1.2-9-1.2-14.1s.4-9.7 1.2-14.1h-14.9c-1.3 4.5-2 9.2-2 14.1s.7 9.6 2 14.1h14.9zm13 31.4c-4-5.6-8-12.8-10.6-21.5h-13.1c5.2 9.6 13.6 17.2 23.7 21.5zm14.6-21.5h-14.7c3.9 10.8 9.9 18.5 14.7 23.4v-23.4zm0-38.1h-17.5c-.8 4.3-1.3 9-1.3 14.1s.5 9.7 1.3 14.1h17.5v-28.2zm0-33.4c-4.8 4.8-10.9 12.5-14.8 23.5h14.8v-23.5zm-38.4 23.5h13.1c2.7-8.7 6.6-15.9 10.6-21.5-10 4.4-18.4 12-23.7 21.5zm230.3 121.8c-5.5-4.3-63-68.1-78.4-77.1V30.4c0-16.8-13.6-30.4-30.4-30.4h-156.2c-16.8 0-30.4 13.6-30.4 30.4v289.7c0 16.8 13.6 30.4 30.4 30.4h68l-3-25.6c-.1-.1-.2-.2-.4-.3h-31.8c.9-3.7 1.2-7.6.7-11.6-1.6-12.6-11.2-23.1-23.5-25.9-5.1-1.2-9.9-1-14.4.1V61.5c5.1 1 10.7.7 16.4-1.5 6.1-2.3 11.2-6.7 14.8-12.1 5.1-7.8 5.9-15.3 4.7-22.1h93.3c-1.2 6.7-.4 14 4.5 21.8 3.5 5.6 8.7 10 14.8 12.3 5.8 2.2 11.4 2.5 16.6 1.5v283.3c-10.6-7.8-22.5-32.2-22.5-32.2s-5.8-65-38.7-65c-.9 0-1.7 0-2.6.1 0 0-24.9 2.1-4.3 73.4l9.2 79.1s10.3 43 38.7 72.7v8.9c0 4.7 3.8 8.6 8.6 8.6h92.6c4.4 0 8-3.3 8.5-7.6 3.3-30.5 15.9-142.9 23.4-162.2 1.4-3.7 2.7-7.4 3.2-11.3 1.2-10 .9-26.4-11.8-36.2z"/></svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- end of timeline --}}
    <div class="md:min-h-screen md:px-20 bg-white grid md:grid-cols-6 md:gap-4">
        <div id="cart-page-element" class="pb-16 pt-4 md:px-8 md:col-span-4 justify-center">
            {{-- start single item --}}
            <div class="shadow-sm shadow-navy px-2 rounded-md ">
                <div class=" grid grid-cols-6 gap-2 md:mb-4">
                    <div class="col-span-1">
                        <img src="https://images.pexels.com/photos/428340/pexels-photo-428340.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                            class="rounded-lg " />
                    </div>
                    <div class="col-span-5 flex flex-col justify-between">
                            <div class="col-span-5 flex justify-between px-2">
                                <h3 class="font-medium capitalize text-navy text-sm truncate">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit.</h3>
                                <span class="font-bold text-green-500 text-lg">$30</span>
                            </div>
                            <div class="grid grid-cols-3 gap-y-2 pb-4">
                                <div class="flex items-center col-span-1">
                                    <span class="text-gray-600 text-xs uppercase pr-1">Color: </span>
                                    <span class="bg-green-500 w-3 h-3 rounded-full"></span>
                                </div>
                                <div class="flex items-center col-span-1">
                                    <span class="text-gray-600 text-xs uppercase pr-1">size: </span>
                                    <span
                                        class="uppercase bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">xl</span>
                                </div>
                                <div class="flex items-center col-span-1">
                                    <span class="text-gray-600 text-xs uppercase pr-1">Qty: </span>
                                    <span
                                        class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">2X</span>
                                </div>
                                <span
                                    class="w-fit flex justify-center items-center bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">In
                                    stock</span>
                                <div class="flex ">
                                    <button
                                        class="bg-slate-200 w-7 h-8 rounded-l-md text-slate-900 text-xl font-medium hover:brightness-75">+</button>
                                    <span class="w-8 bg-slate-100 flex justify-center items-center">1</span>
                                    <button
                                        class="bg-slate-200 w-7 h-8 rounded-r-md text-slate-900 text-xl font-medium hover:brightness-75">-</button>
                                    <button type="button"
                                        class="ml-1 w-7 h-8 flex justify-center items-center focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 mr-2  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        <svg class="w-6 h-4 fill-white" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" width="109.484px" height="122.88px"
                                            viewBox="0 0 109.484 122.88" enable-background="new 0 0 109.484 122.88"
                                            xml:space="preserve">
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2.347,9.633h38.297V3.76c0-2.068,1.689-3.76,3.76-3.76h21.144 c2.07,0,3.76,1.691,3.76,3.76v5.874h37.83c1.293,0,2.347,1.057,2.347,2.349v11.514H0V11.982C0,10.69,1.055,9.633,2.347,9.633 L2.347,9.633z M8.69,29.605h92.921c1.937,0,3.696,1.599,3.521,3.524l-7.864,86.229c-0.174,1.926-1.59,3.521-3.523,3.521h-77.3 c-1.934,0-3.352-1.592-3.524-3.521L5.166,33.129C4.994,31.197,6.751,29.605,8.69,29.605L8.69,29.605z M69.077,42.998h9.866v65.314 h-9.866V42.998L69.077,42.998z M30.072,42.998h9.867v65.314h-9.867V42.998L30.072,42.998z M49.572,42.998h9.869v65.314h-9.869 V42.998L49.572,42.998z" />
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            {{-- end of single item --}}
        </div>
        <div class="bg-slate-100 md:mt-6 md:col-span-2 md:h-3/4 rounded-2xl md:p-6 flex flex-col md:space-y-4 px-4">
            <h1 class="font-semibold text">Order summary</h1>

            <div class="flex justify-between border-b-2 border-slate-300  py-4">
                <span class="text-sm ">Subtotal</span>
                <span id="summary-subtotal-element" class="font-medium"></span>
            </div>
            <div class="flex justify-between border-b-2 border-slate-300  py-4">
                <span class="text-sm ">Shipping Estimate</span>
                <span id="summary-shipping-element" class="font-medium"></span>
            </div>
            <div class="flex justify-between py-4 md:pt-10">
                <span class="text-sm font-medium ">Total</span>
                <span id="summary-total-element" class="font-medium"></span>
            </div>
            <div class="flex">
                <button type="button"
                    class="w-full text-white bg-navy hover:brightness-110 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Checkout</button>
            </div>

            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                <p>
                    or
                    <a href="#" type="button" class="font-medium text-navy hover:brightness-110">
                        Continue Shopping
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
