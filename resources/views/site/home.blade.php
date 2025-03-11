<x-template>
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class="container">
            <div class="section text-center mb-4">
                <h2 class="title">Select your city</h2>
            </div>
            <div>
                <ul class="flex-column ms-n3 nav">
                    @foreach ($cities as $city)
                        <li class="nav-item">
                            <a class="nav-link text-center" href="{{ route('ads-by-city', $city) }}" >
                                {{ $city->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-template>
