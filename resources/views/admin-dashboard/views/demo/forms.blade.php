@extends('admin-dashboard.layouts.base')
@section('content')
    
    <div class="flex flex-col flex-1">
      <header class="z-10 py-4 bg-white shadow-md">
        <div
          class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600">
          <!-- Mobile hamburger -->
          <button class="p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <!-- Search input -->
          <div class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
              <div class="absolute inset-y-0 flex items-center pl-2">
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <input
                class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                type="text" placeholder="Search for projects" aria-label="Search" />
            </div>
          </div>
          <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
              <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme"
                aria-label="Toggle color mode">
                <template x-if="!dark">
                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                  </svg>
                </template>
                <template x-if="dark">
                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                      clip-rule="evenodd"></path>
                  </svg>
                </template>
              </button>
            </li>
            <!-- Notifications menu -->
            <li class="relative">
              <button class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu" aria-label="Notifications"
                aria-haspopup="true">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                  </path>
                </svg>
                <!-- Notification badge -->
                <span aria-hidden="true"
                  class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full"></span>
              </button>
              <template x-if="isNotificationsMenuOpen">
                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0" @click.away="closeNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                  aria-label="submenu">
                  <li class="flex">
                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <span>Messages</span>
                      <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                        13
                      </span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <span>Sales</span>
                      <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                        2
                      </span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <span>Alerts</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <!-- Profile menu -->
            <li class="relative">
              <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                <img class="object-cover w-8 h-8 rounded-full"
                  src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                  alt="" aria-hidden="true" />
              </button>
              <template x-if="isProfileMenuOpen">
                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
                  class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                  aria-label="submenu">
                  <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                          d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                        </path>
                      </svg>
                      <span>Log out</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Forms
          </h2>
          <!-- CTA -->
          <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            href="https://github.com/estevanmaito/windmill-dashboard">
            <div class="flex items-center">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <span>Star this project on GitHub</span>
            </div>
            <span>View more &RightArrow;</span>
          </a>

          <!-- General elements -->
          <h4 class="mb-4 text-lg font-semibold text-gray-600">
            Elements
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <label class="block text-sm">
              <span class="text-gray-700">Name</span>
              <input
                class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                placeholder="Jane Doe" />
            </label>

            <div class="mt-4 text-sm">
              <span class="text-gray-700">
                Account Type
              </span>
              <div class="mt-2">
                <label class="inline-flex items-center text-gray-600">
                  <input type="radio"
                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                    name="accountType" value="personal" />
                  <span class="ml-2">Personal</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600">
                  <input type="radio"
                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                    name="accountType" value="busines" />
                  <span class="ml-2">Business</span>
                </label>
              </div>
            </div>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700">
                Requested Limit
              </span>
              <select
                class="block w-full mt-1 text-sm form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                <option>$1,000</option>
                <option>$5,000</option>
                <option>$10,000</option>
                <option>$25,000</option>
              </select>
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700">
                Multiselect
              </span>
              <select
                class="block w-full mt-1 text-sm form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                multiple>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
              </select>
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700">Message</span>
              <textarea
                class="block w-full mt-1 text-sm form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                rows="3" placeholder="Enter some long form content."></textarea>
            </label>

            <div class="flex mt-6 text-sm">
              <label class="flex items-center">
                <input type="checkbox"
                  class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" />
                <span class="ml-2">
                  I agree to the
                  <span class="underline">privacy policy</span>
                </span>
              </label>
            </div>
          </div>

          <!-- Validation inputs -->
          <h4 class="mb-4 text-lg font-semibold text-gray-600">
            Validation
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <!-- Invalid input -->
            <label class="block text-sm">
              <span class="text-gray-700">
                Invalid input
              </span>
              <input
                class="block w-full mt-1 text-sm border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input"
                placeholder="Jane Doe" />
              <span class="text-xs text-red-600">
                Your password is too short.
              </span>
            </label>

            <!-- Valid input -->
            <label class="block mt-4 text-sm">
              <span class="text-gray-700">
                Valid input
              </span>
              <input
                class="block w-full mt-1 text-sm border-green-600 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
                placeholder="Jane Doe" />
              <span class="text-xs text-green-600">
                Your password is strong.
              </span>
            </label>

            <!-- Helper text -->
            <label class="block mt-4 text-sm">
              <span class="text-gray-700">
                Helper text
              </span>
              <input
                class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                placeholder="Jane Doe" />
              <span class="text-xs text-gray-600">
                Your password must be at least 6 characters long.
              </span>
            </label>
          </div>

          <!-- Inputs with icons -->
          <h4 class="mb-4 text-lg font-semibold text-gray-600">
            Icons
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <label class="block text-sm">
              <span class="text-gray-700">Icon left</span>
              <!-- focus-within sets the color for the icon when input is focused -->
              <div class="relative text-gray-500 focus-within:text-purple-600">
                <input
                  class="block w-full pl-10 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Jane Doe" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                  </svg>
                </div>
              </div>
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700">Icon right</span>
              <!-- focus-within sets the color for the icon when input is focused -->
              <div class="relative text-gray-500 focus-within:text-purple-600">
                <input
                  class="block w-full pr-10 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Jane Doe" />
                <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                  </svg>
                </div>
              </div>
            </label>
          </div>

          <!-- Inputs with buttons -->
          <h4 class="mb-4 text-lg font-semibold text-gray-600">
            Buttons
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <label class="block text-sm">
              <span class="text-gray-700">
                Button left
              </span>
              <div class="relative">
                <input
                  class="block w-full pl-20 mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Jane Doe" />
                <button
                  class="absolute inset-y-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-l-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  Click
                </button>
              </div>
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700">
                Button right
              </span>
              <div class="relative text-gray-500 focus-within:text-purple-600">
                <input
                  class="block w-full pr-20 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Jane Doe" />
                <button
                  class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  Click
                </button>
              </div>
            </label>
          </div>
        </div>
      </main>
    </div>
@endsection