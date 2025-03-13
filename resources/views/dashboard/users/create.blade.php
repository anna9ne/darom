<x-app-layout>

    <!-- Form -->
    <div class="mt-8 mx-4">
        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight pt-8">Create User</h1>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <form action="{{ route('dashboard.users.store') }}" method="POST" enctype="multipart/form-data" class="p-6 flex flex-col justify-center">
                @csrf

                <div class="flex flex-col mt-2">
                    <label for="name" class="hidden">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name"
                           value="{{ old('name') }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('name')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="email" class="hidden">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                           value="{{ old('email') }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('email')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="password" class="hidden">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password"
                           value="{{ old('password') }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('password')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="role">Role</label>
                    <select name="role" id="role"
                            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" >
                        @foreach($roles as $id => $role)
                            <option
                                value="{{ $id }}"
                                {{ $id == old('role') ? ' selected ' : '' }}>
                                {{ $role }}
                            </option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="grid grid-cols-2 mt-4">
                    <a href="{{ route('dashboard.users.index') }}" class="md:w-32 bg-white dark:bg-gray-100 text-blue-600 border-2 border-blue-600 dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-200 dark:hover:bg-gray-200 transition ease-in-out duration-300 text-center">Cancel</a>

                    <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- ./ Form -->

</x-app-layout>
