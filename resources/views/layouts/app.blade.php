<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>



<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
        </button>
      </div>
      <a href="/">
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
        <img class="block h-8 w-auto lg:hidden" src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="LaravelAssignment">
          <img class="hidden h-8 w-auto lg:block" src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="Your Company">
          </a> 
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
  
            <a href="/" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Assignment</a>

            <a href="/index" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">To-Do App</a>

            <a href="/create" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Create</a>

  
          </div>
        </div>
      </div>
       
          
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="/" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Assignment</a>

      <a href="/index" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">To-Do App</a>

      <a href="/create" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Create</a>

    
    </div>
  </div>
</nav>



<div class="text-lg m-12 break-normal">

    @yield('content')

</div>

</script>
</body>
</html>


