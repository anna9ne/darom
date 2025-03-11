<x-page-layout>
    <div class="card card-body shadow-xl mx-3 mx-md-4">
        <div class="container">
            <!-- START Testimonials w/ user image & text & info -->
            <section class="position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="row py-5">
                                <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                                    <div class="section flex justify-center mb-4">
                                        <img src="{{'/storage/' . $ad->image}}" alt="{{ $ad->title }}">
                                    </div>
                                    <div class="mb-4">
                                        <h1 class="mb-0 h3">{{ $ad->title }}</h1>
                                    </div>
                                    <div class="row mb-4 flex justify-between">
                                        <p class="text-sm col-6">{{ $ad->user->name }}</p>
                                        <p class="text-sm col-6 text-right">{{ $date }}</p>
                                    </div>
                                    <p class="mb-4">
                                        {{ $ad->description }}
                                    </p>
                                    <div class="row">
                                        <h6>Contacts:</h6>
                                        @if ($ad->phone)
                                            <p>{{ $ad->phone }}</p>
                                        @endif
                                        @if ($ad->email)
                                            <p>{{ $ad->email }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Testimonials w/ user image & text & info -->
        </div>
    </div>
</x-page-layout>
