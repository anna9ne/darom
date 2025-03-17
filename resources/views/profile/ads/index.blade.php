<x-profile-layout>
    <div class="card card-body shadow-xl mx-3 mx-md-4">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5 h3">Advertisements</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($ads as $ad)
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a href="{{ route('ad', $ad) }}" class="d-block blur-shadow-image">
                                <img src="{{'/storage/' . $ad->image}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="{{ route('ad', $ad) }}" class="text-dark font-weight-bold">{{ $ad->title }}</a>
                            </h5>
                            {{--<p>{{ $ad->created_at }}</p>--}}
                            <a href="{{ route('ad', $ad) }}" class="block text-info text-sm icon-move-right">Show</a>
                            <a href="{{ route('profile.ads.edit', $ad) }}" class="block text-sm icon-move-right text-red-500">Edit</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{ $ads->links() }}

        </div>
    </div>
</x-profile-layout>
