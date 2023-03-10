<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forgot password - Windmill Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <link rel="stylesheet" href="{{ asset('css/admin-dashboard/tailwind.output.css') }}" />
  <script src="{{ asset('js/admin-dashboard/init-alpine.js') }}"></script>
</head>

<body>
  <div class="flex items-center min-h-screen p-6 bg-gray-50">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full"
            src="{{ asset('img/forgot-password-office.jpeg')}}" alt="Office" />
          <img aria-hidden="true" class="hidden object-cover w-full h-full"
            src="{{ asset('img/forgot-password-office-dark.jpeg')}}" alt="Office" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700">
              Forgot password
            </h1>
            <label class="block text-sm">
              <span class="text-gray-700">Email</span>
              <input
                class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                placeholder="Jane Doe" />
            </label>

            <!-- You should use a button here, as the anchor is only used for the example  -->
            <a class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              href="./login.html">
              Recover password
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>