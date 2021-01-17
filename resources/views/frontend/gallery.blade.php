@extends('layouts.main')

@section('content')

<section id="page-header" class="ph-xlg">

    <div class="page-header-image  bg-image" style="background-image: url({{asset('assets/img/misc/page-header-bg-10.jpg')}});">

        <div class="cover bg-transparent-5-dark"></div>
    </div>


    <div class="page-header-inner tt-wrap">

        <div class="page-header-caption parallax-4 fade-out-scroll-4">
            <h1 class="page-header-title">View Images from Over the Globe</h1>
        </div>

    </div>

</section>


<section id="gallery-single-section">
    <div class="isotope-wrap">


        <div class="isotope col-4">

            <div id="gallery" class="isotope-items-wrap lightgallery gsi-color" data-lightgallery="group"
                data-lg-thumbnail="false">

                <div class="grid-sizer"></div>

                @foreach ($images as $image)
                    <div class="isotope-item">

                        <a href="{{asset('storage/'.$image->image)}}" data-lightgallery="item"
                            class="gallery-single-item lg-trigger"
                            data-exthumbnail="{{asset('storage/'.$image->image)}}"
                            data-sub-html="<p>By {{$image->user->name }}</p>">

                            <img src="{{asset('storage/'.$image->image)}}" class="gs-item-image" alt="">


                            <div class="gsi-image-caption">{{$image->user->name}}</div>

                            <div class="gs-item-icon"><i class="fa fa-search"></i></div>

                        </a>

                    </div>

                @endforeach

            </div>

        </div>

    </div>
</section>


@endsection
