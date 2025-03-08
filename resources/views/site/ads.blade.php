<x-template>
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Your main section here</h2>
            </div>
            <div>
                <ul class="flex-column ms-n3 nav">
                    @foreach ($ads as $ad)
                        <li class="nav-item">
                            <a class="nav-link" href="#{{--{{ 'cities.index' }}--}}" >
                                {{ $ads->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-template>
