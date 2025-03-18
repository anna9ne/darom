<x-profile-layout>
    <!-- Table -->
    <div class="mt-4 mx-4">
        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight pt-8">Advertisements</h1>
        <div class="flex justify-end mb-4">
            <a href="{{ route('profile.ads.create') }}" class="md:w-32 bg-white dark:bg-gray-100 text-blue-600 border-2 border-blue-600 dark:text-gray-800 font-bold py-2 px-3 rounded-lg mt-4 hover:bg-blue-200 dark:hover:bg-gray-200 transition ease-in-out duration-300 text-center">New Advert</a>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">City</th>
                        <th class="px-4 py-3">Active</th>
                        <th class="px-4 py-3">Moderated</th>
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    @foreach($ads as $ad)
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $ad->id }}</td>
                            <td class="px-4 py-3 text-sm"><img class="w-12 h-12" src="{{'/storage/' . $ad->image}}" alt=""></td>
                            <td class="px-4 py-3 text-sm">{{ $ad->title }}</td>
                            <td class="px-4 py-3 text-sm">{{ $ad->city->name }}</td>
                            <td class="px-4 py-3 text-sm">{{ $ad->active }}</td>
                            <td class="px-4 py-3 text-sm">{{ $ad->moderated }}</td>
                            <td class="px-4 py-3 text-xs">
                                <a href="{{ route('ad', $ad) }}" target="_blank">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> View </span>
                                </a>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <a href="{{ route('profile.ads.edit', $ad) }}">
                                    <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100"> Edit </span>
                                </a>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <form action="{{ route('profile.ads.destroy', $ad) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"> Delete </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="px-4 py-6 text-xs font-semibold tracking-wide text-gray-500 border-t dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                {{ $ads->links() }}
            </div>

        </div>
    </div>
    <!-- Table -->
</x-profile-layout>
