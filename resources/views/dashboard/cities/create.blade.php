<x-app-layout>

    <!-- Form -->
    <div class="mt-8 mx-4">
        <div class="grid grid-cols-1 md:grid-cols-2">

            <form action="{{ route('dashboard.cities.store') }}" method="POST" class="p-6 flex flex-col justify-center">
                @csrf
                <div class="flex flex-col">
                    <label for="name" class="hidden">City Name</label>
                    <input type="text" name="name" id="name" placeholder="City Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                </div>

                <div class="grid grid-cols-2  mt-4">

                <a href="{{ route('dashboard.cities.index') }}" class="md:w-32 bg-white dark:bg-gray-100 text-blue-600 border-2 border-blue-600 dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-200 dark:hover:bg-gray-200 transition ease-in-out duration-300 text-center">Cancel</a>

                <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- ./ Form -->

</x-app-layout>
