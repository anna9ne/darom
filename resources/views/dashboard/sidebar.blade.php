
<!-- Sidebar -->
<div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
<div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
  <ul class="flex flex-col py-4 space-y-1">
    <li class="px-5 hidden md:block">
      <div class="flex flex-row items-center h-8">
        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
      </div>
    </li>
    <li>
      <a href="{{ route('dashboard') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="{{ route('dashboard.users.index') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="ml-2 text-sm tracking-wide truncate">Users</span>
      </a>
    </li>
    <li>
      <a href="{{ route('dashboard.cities.index') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="ml-2 text-sm tracking-wide truncate">Cities</span>
      </a>
    </li>
    <li>
      <a href="{{ route('dashboard.ads.index') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="ml-2 text-sm tracking-wide truncate">Advertisements</span>

      </a>
    </li>

  </ul>
  {{--<p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>--}}
</div>
</div>
<!-- ./Sidebar -->

