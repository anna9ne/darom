<x-app-layout>

    <!-- Form -->
    <div class="mt-8 mx-4">
        <div class="grid grid-cols-1 md:grid-cols-2">

            <form action="{{ route('dashboard.ads.update', $ad) }}" method="POST" enctype="multipart/form-data" class="p-6 flex flex-col justify-center">
                @csrf
                @method('PUT')
                <div class="flex flex-col mt-2">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title"
                           value="{{ old('title') ?: $ad->title }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('title')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" placeholder="Slug"
                           value="{{ old('slug') ?: $ad->slug }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('slug')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" placeholder="Description" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">{{ old('description') ?: $ad->description }}</textarea>
                    @error('description')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="image">Image</label>
                    <img class="w-16 h-16" src="{{'/storage/' . $ad->image}}" alt="">
                    <input type="file" name="image" id="image"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('image')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="Phone"
                           value="{{ old('phone') ?: $ad->phone }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('phone')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                           value="{{ old('email') ?: $ad->email }}"
                           class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                    @error('email')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mt-2">
                    <label for="city">City</label>
                    <select name="city_id" id="city"
                            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" >
                        <option value="">Select city</option>
                        @foreach($cities as $city)
                            <option
                                {{ $city->id === $ad->city->id ? ' selected ' : '' }}
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

