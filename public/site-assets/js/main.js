
// header toggle
$("#dropdown").click(() => {
    $("#dropdownArea").toggle();
});

// header category toggle
$("#categoryDropdown").click(() => {
    $("#CategoryDropdownArea").toggle();
});

// category toggle
$("#category-toggle-btn").click((e) => {
    e.preventDefault();
    $("#toggle-category").toggle();
});

// owl carousel
$('.banner-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1,
            dots: true
        },
        1000: {
            items: 1
        }
    }
});
// flash deal carousel
$('.flash-deal-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 2,
            margin: 10,
            nav: false,
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 4
        }
    }
});
// top categories slider
$('.top-categories-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
            margin: 10,
            nav: false,
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 3
        }
    }
});

$('.product-img-slider').owlCarousel({
    items: 1,
    loop: false,
    center: true,
    margin: 10,
    nav: false,
    dots: false,
    URLhashListener: true,
    autoplayHoverPause: true,
    startPosition: 'URLHash',
    smartSpeed: 750
});

// tab
$('.tab').on('click', function (evt) {
    evt.preventDefault();
    $('.tab').removeClass('active');
    $(this).toggleClass('active');
    var sel = this.getAttribute('data-toggle-target');
    $('.tab-content').removeClass('active').filter(sel).addClass('active');
});

// shopping cart
let isShoppingCartOpened = false;
let shoppingCartElement = document.getElementById('shoppingCartElement');
let shoppingCartUlElement = document.getElementById('shopping-cart-ul-element');
let cartItemeCountBottomNav = document.getElementById('cart-items-count-bottom-nav');
let cartItemsCountTopNav = document.getElementById('cart-items-count-top-nav');
let subtotalElement = document.getElementById('subtotal-element');

// cart page
let cartPageElement = document.getElementById('cart-page-element');
let summarySubtotal = document.getElementById('summary-subtotal-element');
let summaryShipping = document.getElementById('summary-shipping-element');
let summaryTotal = document.getElementById('summary-total-element');



function toggleShoppingCart() {

    isShoppingCartOpened = !isShoppingCartOpened;
    if (isShoppingCartOpened) {
        // remove hidden class
        shoppingCartElement.classList.remove('hidden');
        return;
    }
    // add hidden class
    shoppingCartElement.classList.add('hidden');
}


// shopping cart logic

let cartItemes = JSON.parse(localStorage.getItem('CART'));

function init() {
    if (!cartItemes) {
        cartItemes = [];
        updateLocalStorage(cartItemes);
    }
    renderCart();
    renderSubtotal();

    renderCartPage();
}

// add item to the cart
function addToCart(data = {}) {
    data = {
        'title': 'this is title',
        'qty': 1,
        'price': 20.00,
    };

    cartItemes = getCartItems();
    cartItemes.push(data);

    updateLocalStorage(cartItemes);
    renderCart();
}

// add item to the cart
function removeFromCart(indexOfItem) {

    cartItemes = getCartItems();
    let filtered = cartItemes.filter((item, index) => {
        return index != indexOfItem;
    });

    updateLocalStorage(filtered);
    renderCart();
    renderCartPage();
}

function increaseQty(index, by = 1) {
    cartItemes = getCartItems();
    cartItemes[index].qty += by;
    updateLocalStorage(cartItemes);
    renderCart();
    renderSubtotal();
    renderCartPage();
}

function decreaseQty(index, by = 1) {
    cartItemes = getCartItems();
    if(cartItemes[index].qty==1){
        return;
    }
    cartItemes[index].qty -= by;
    updateLocalStorage(cartItemes);
    renderCart();
    renderSubtotal();
    renderCartPage();
}

function calcSubtotal() {
    let subtotal = 0;
    cartItemes = getCartItems();
    cartItemes.forEach(item => {
        subtotal += item.price * item.qty;
    });

    return subtotal;
}

function calcShippingCost() {
    let subtotal = calcSubtotal();
    let shippingCost = 0;
    if (subtotal <= 100) {
        shippingCost = 5;
    } else if (subtotal <= 120) {
        shippingCost = 7;
    } else if(subtotal <=200){
        shippingCost = 10;
    }else{
        shippingCost = 13;
    }
    return shippingCost;
}

// get cart data
function getCartItems() {
    return JSON.parse(localStorage.getItem('CART'));
}

// update localstorage
function updateLocalStorage(data) {
    localStorage.setItem('CART', JSON.stringify(data));
    return getCartItems();
}

function renderItemsCount() {
    cartItemes = getCartItems();
    cartItemeCountBottomNav.innerHTML = cartItemes.length
    cartItemsCountTopNav.innerHTML = cartItemes.length
}

function renderSubtotal() {
    subtotalElement.innerHTML = '$' + calcSubtotal();
}

function renderCart() {
    cartItemes = getCartItems();
    shoppingCartUlElement.innerHTML = ``;
    cartItemes.forEach((item, index) => {
        shoppingCartUlElement.innerHTML += `
            <li class="flex py-6">
                <div
                    class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                        alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                        class="h-full w-full object-cover object-center">
                </div>
                <div class="ml-4 flex flex-1 flex-col">
                    <div>
                        <div
                            class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                                <a href="#">${item.title}</a>
                            </h3>
                            <p class="ml-4">$${item.price}</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Salmon</p>
                    </div>
                    <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">Qty ${item.qty}</p>
    
                        <div class="flex">
                            <button onclick="removeFromCart(${index})" type="button"
                                class="font-medium text-navy hover:text-indigo-500">Remove</button>
                        </div>
                    </div>
                </div>
            </li>
        `;
    });

    renderItemsCount();
    renderSubtotal();
}

function renderSummary(){
    summaryShipping.innerHTML = '$' + calcShippingCost();
    summarySubtotal.innerHTML = '$' + calcSubtotal();
    summaryTotal.innerHTML = '$' + (calcSubtotal() + calcShippingCost());
    
}

function renderCartPage() {
    let urlArray = window.location.href.split('/');
    if(urlArray[urlArray.length -1] !== 'cart'){
        return;
    }
    cartItemes = getCartItems();
    cartPageElement.innerHTML = '';
    cartItemes.forEach((item, index) => {
        cartPageElement.innerHTML += `
            <div class="shadow-sm shadow-navy px-2 rounded-md ">
                <div class=" grid grid-cols-6 gap-2 md:mb-4">
                    <div class="col-span-1">
                        <img src="https://images.pexels.com/photos/428340/pexels-photo-428340.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                            class="rounded-lg " />
                    </div>
                    <div class="col-span-5 flex flex-col justify-between">
                            <div class="col-span-5 flex justify-between px-2">
                                <h3 class="font-medium capitalize text-navy text-sm truncate">${item.title}</h3>
                                <span class="font-bold text-green-500 text-lg">$${item.price}</span>
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
                                        class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">${item.qty}X</span>
                                </div>
                                <span
                                    class="w-fit flex justify-center items-center bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">In
                                    stock</span>
                                <div class="flex ">
                                    <button
                                        onclick="increaseQty(${index})"
                                        class="bg-slate-200 w-7 h-8 rounded-l-md text-slate-900 text-xl font-medium hover:brightness-75">+</button>
                                    <span class="w-8 bg-slate-100 flex justify-center items-center">${item.qty}</span>
                                    <button onclick="decreaseQty(${index})"
                                        class="bg-slate-200 w-7 h-8 rounded-r-md text-slate-900 text-xl font-medium hover:brightness-75">-</button>
                                    <button onclick="removeFromCart(${index})" type="button"
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
        `;
    });
    renderSummary();
}

init();
// addToCart()
// decreaseQty(1)
// increaseQty(1);
removeFromCart(5)
console.log('subtotal: ', calcSubtotal());
console.log('shipping cost:', calcShippingCost());