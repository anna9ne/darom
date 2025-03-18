<x-app-layout>
    <div class="mt-4 mx-4">
        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight pt-8">Advertisement {{ $ad->id }}</h1>
    </div>
    <div class="grid grid-cols-1 p-4 gap-4">

        <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                        <tr>
                            <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Field</th>
                            <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Value</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">ID</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->id }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">title</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->title }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">slug</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->slug }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">description</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->description }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">image</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">
                                    <img class="w-20 h-20" src="{{'/storage/' . $ad->image}}" alt="">
                                </td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">phone</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->phone }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">email</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->email }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">active</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->active }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">moderated</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->moderated }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">user</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->user->name }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">city</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->city->name }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">created</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->created_at }}</td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-left">updated</th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs p-4">{{ $ad->updated_at }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ./Social Traffic -->

    </div>

    <div class="grid grid-cols-3 mt-4 mx-4">
        <a href="{{ route('dashboard.ads.index') }}" class="md:w-32 bg-white dark:bg-gray-100 text-blue-600 border-2 border-blue-600 dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-200 dark:hover:bg-gray-200 transition ease-in-out duration-300 text-center">Back</a>

        <a href="{{ route('dashboard.ads.edit', $ad) }}" class="md:w-32 bg-white dark:bg-gray-100 text-blue-600 border-2 border-blue-600 dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-200 dark:hover:bg-gray-200 transition ease-in-out duration-300 text-center">Edit</a>

        <form action="{{ route('dashboard.ads.destroy', $ad) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300"> Delete </button>
        </form>

{{--        <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>--}}
    </div>
</x-app-layout>
