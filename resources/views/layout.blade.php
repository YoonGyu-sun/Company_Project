<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Laravel')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <nav class="bg-white shadow-sm">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
              <div class="flex">
                <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center">
                   Home
                </a>
              </div>
              <div class="-mr-2 flex items-center lg:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
                  <!-- Icon when menu is closed. -->
                  <!-- Menu open: "hidden", Menu closed: "block" -->
                  <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                  </svg>
                  <!-- Icon when menu is open. -->
                  <!-- Menu open: "block", Menu closed: "hidden" -->
                  <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
              <div class="hidden lg:flex lg:items-center">
                <a href="/tasks" class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-900 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition duration-150 ease-in-out">Task</a>
                <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-900 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition duration-150 ease-in-out">About</a>
                <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-900 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition duration-150 ease-in-out">Contact</a>
              </div>
              <div class="hidden lg:flex lg:items-center">
                <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-900 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition duration-150 ease-in-out">//</a>
                <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-900 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition duration-150 ease-in-out">//</a>
              </div>
            </div>
          </div>
        </nav>
      </div>

    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>