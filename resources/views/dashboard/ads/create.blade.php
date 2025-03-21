<x-app-layout>

    <!-- Form -->
    <div class="mt-8 mx-4">
        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight pt-8">Create Advertisement</h1>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <form action="{{ route('dashboard.ads.store') }}" method="POST" enctype="multipart/form-data" class="p-6 flex flex-col justify-center">
                @csrf

                <div class="flex flex-col mt-2">
                    <label for="title" class="hidden">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title"
                           value="{{ old('title') }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('title')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

{{--                <div class="flex flex-col mt-2">
                    <label for="slug" class="hidden">Slug</label>
                    <input type="text" name="slug" id="slug" placeholder="Slug"
                           value="{{ old('slug') }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('slug')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>--}}

                <div class="flex flex-col mt-2">
                    <label for="description" class="hidden">Description</label>
                    <textarea name="description" id="description" placeholder="Description" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="image" class="hidden">Image</label>
                    <input type="file" name="image" id="image" placeholder="Image"
                           value="{{ old('image') }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('image')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="phone" class="hidden">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="Phone"
                           value="{{ old('phone') }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('phone')
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
                    <label for="city" class="hidden">City</label>
                    <select name="city_id" id="city"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" >
                        <option value="">Select city</option>
                        @foreach($cities as $city)
                            <option
                                {{ old('city_id') == $city->id ? ' selected ' : '' }}
                                value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    @error('city_id')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-row mt-2">
                    <input type="checkbox" name="active" id="active" value="1" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                        {{ old('active') == 1 ? 'checked' : '' }}/>
                    <label for="active" class="ml-2 mt-2">Publish</label>
                    @error('active')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="grid grid-cols-2 mt-4">
                    <a href="{{ route('dashboard.ads.index') }}" class="md:w-32 bg-white dark:bg-gray-100 text-blue-600 border-2 border-blue-600 dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-200 dark:hover:bg-gray-200 transition ease-in-out duration-300 text-center">Cancel</a>

                    <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- ./ Form -->

</x-app-layout>
