<x-app-layout>
    <!-- Table -->
    <div class="mt-4 mx-4">
        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight pt-8">Users</h1>
        <div class="flex justify-end mb-4">
            <a href="{{ route('dashboard.users.create') }}" class="md:w-32 bg-white dark:bg-gray-100 text-blue-600 border-2 border-blue-600 dark:text-gray-800 font-bold py-2 px-3 rounded-lg mt-4 hover:bg-blue-200 dark:hover:bg-gray-200 transition ease-in-out duration-300 text-center">New User</a>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3">Role</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Email Verified</th>
                        <th class="px-4 py-3">Created</th>
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    @foreach($users as $user)
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $user->id }}</td>
                            <td class="px-4 py-3 text-sm">{{ $roles[$user->role] }}</td>
                            <td class="px-4 py-3 text-sm">{{ $user->name }}</td>
                            <td class="px-4 py-3 text-sm">{{ $user->email }}</td>
                            <td class="px-4 py-3 text-sm">{{ $user->email_verified_at ? 1 : 0 }}</td>
                            <td class="px-4 py-3 text-sm">{{ $user->created_at }}</td>
                            <td class="px-4 py-3 text-xs">
                                <a href="{{ route('dashboard.users.edit', $user) }}">
                                    <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100"> Edit </span>
                                </a>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <form action="{{ route('dashboard.users.destroy', $user) }}" method="POST">
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

        </div>
    </div>
    <!-- Table -->

</x-app-layout>

