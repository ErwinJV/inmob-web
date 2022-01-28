<div class="container mt-3">
    <div class="row">
        <div class="col-12 col-lg-8 d-flex justify-content-md-center">

            {{-- CAROUSEL --}}
            <div id="carouselExampleControls" class="carousel slide d-md-none" data-bs-ride="carousel">
                <div class="carousel-inner">
           {{--
                    @foreach ($property->images as $key => $image)
                        @if ($key == 0)
                            <div class="carousel-item active rounded-2">
                                <a href="{{ Storage::url($image->url) }}" data-fancybox="gallery"
                                    data-caption="Optional caption">
                                    <img src="{{ Storage::url($image->url) }}" class="d-block w-100 rounded-2"
                                        alt="{{ $key }}">
                                </a>

                            </div>
                        @else
                            <div class="carousel-item rounded-2">
                                <img src="{{ Storage::url($image->url) }}" class="d-block w-100 rounded-2"
                                    alt="{{ $key }}">
                            </div>
                        @endif
                    @endforeach

            --}}

            @foreach ($photos as $photo)

            @if ($photo == 1)
            <div class="carousel-item active rounded-2">
                <img src="{{ Storage::url('property_images/'.$photo.'.jpeg') }}"  class="d-block w-100 rounded-2"
                    >
            </div>

            @else
            <div class="carousel-item  rounded-2">
                <img src="{{ Storage::url('property_images/'.$photo.'.jpeg') }}"  class="d-block w-100 rounded-2"
                    >
            </div>

            @endif



        @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            {{-- GALLERY MD --}}
            <div class="gallery-container d-none d-md-grid">
    {{--
                @foreach ($property->images as $key => $image)


                    @if ($key > 5)
                        <div class="gallery-item rounded-3 d-none">

                            <a href="{{Storage::url($image->url)}}" data-fancybox="gallery"
                                data-caption="Optional caption">
                                <img src="{{ Storage::url($image->url) }}" class="rounded-3 d-none"
                                    alt="{{ $key }}">
                            </a>

                        </div>
                    @else
                        <div class="gallery-item rounded-3">
                            <a href="{{Storage::url($image->url)}}" data-fancybox="gallery"
                                data-caption="Optional caption">
                                <img src="{{ Storage::url($image->url) }}" class="rounded-3"
                                    alt="{{ $key }}">
                            </a>
                        </div>
                    @endif



                @endforeach

--}}

@foreach ($photos as $photo)


@if ($photo > 6)
    <div class="gallery-item rounded-3 d-none">

        <a href="{{Storage::url('property_images/'.$photo.'.jpeg')}}" data-fancybox="gallery"
            data-caption="Optional caption">
            <img src="{{ Storage::url('property_images/'.$photo.'.jpeg') }}" class="rounded-3 d-none"
                >
        </a>

    </div>
@else
    <div class="gallery-item rounded-3">
        <a href="{{Storage::url('property_images/'.$photo.'.jpeg')}}" data-fancybox="gallery"
            data-caption="Optional caption">
            <img src="{{ Storage::url('property_images/'.$photo.'.jpeg') }}" class="rounded-3"
                >
        </a>
    </div>
@endif



@endforeach

            </div>

        </div>
{{--
        <div class="col-12 col-lg-4 mt-2">
            <h1 class="text-center mt-2">{{ $property->title }}</h1>
            <p class="text-left fs-4 mt-3">{{ $property->desc }}</p>
        </div>
--}}
    </div>



</div>
