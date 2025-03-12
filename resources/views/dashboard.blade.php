<x-app-layout>
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 p-4 gap-4">
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <a href="" class="flex items-center justify-between">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">{{ $countUsers }}</p>
                <p>Users</p>
            </div>
        </a>
        </div>

        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <a href="{{ route('dashboard.cities.index') }}" class="flex items-center justify-between">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">{{ $countCities }}</p>
                <p>Cities</p>
            </div>
            </a>
        </div>

        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <a href="{{ route('dashboard.ads.index') }}" class="flex items-center justify-between">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">{{ $countAds }}</p>
                <p>Advertisements</p>
            </div>
            </a>
        </div>

    </div>
    <!-- ./Statistics Cards -->

</x-app-layout>
