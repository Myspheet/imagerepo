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

            <div class="isotope-top-content">

                <a href="#0" class="gallery-share gs-right" data-toggle="modal" data-target="#modal-64253091"
                    title="Share this gallery"><i class="fa fa-share-alt"></i></a>


                <div id="modal-64253091" class="modal modal-center fade" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                        class="tt-close-btn"></i></button>
                                <h4 class="modal-title">Share This Gallery:</h4>
                            </div>
                            <div class="modal-body">

                                <div class="modal-body-image-1 bg-image"
                                    style="background-image: url(assets/img/misc/page-header-bg-10.jpg); background-position: 50% 50%;">
                                </div>


                                <div class="modal-body-content">

                                    <div class="modal-share">

                                        <div class="social-buttons">
                                            <ul>
                                                <li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"
                                                        title="Share on facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"
                                                        title="Share on twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"
                                                        title="Share on google+"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"
                                                        title="Share on pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>


                                        <input class="grab-link" type="text" readonly="" value="https://yoursite.com/your-gallery-link/"
                                            onclick="this.select()">
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                &copy; Photo Studio 2018 / All rights reserved
                            </div>
                        </div>
                    </div>
                </div>

            </div>


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


            <div class="isotope-pagination">
                <div class="iso-load-more">
                    <a class="btn btn-dark-bordered btn-lg" href="#">View More</a>
                </div>
            </div>

        </div>

    </div>
</section>


<section id="more-projects-section">

    <div class="custom-heading padding-on text-center bg-gray-3">
        <div class="custom-heading-inner tt-wrap">
            <h1 class="custom-heading-title">More Projects You Might Like</h1>
            <div class="custom-heading-subtitle">Please see my other projects</div>
            <hr class="hr-short">
        </div>
    </div>

    <div class="more-projects-inner">

        <div class="project-carousel">

            <div class="owl-carousel cc-height-1 cc-hover-dark nav-outside-top" data-xl-items="4" data-margin="0"
                data-dots="false" data-nav="true" data-nav-speed="800" data-items="1" data-lg-items="3" data-md-items="2"
                data-xs-items="1" data-items="1">

                <a href="#" class="cc-item">

                    <div class="cc-image full-cover bg-image"
                        style="background-image: url(assets/img/gallery/gallery-list/auto-width/gallery-auto-width-7.jpg);">
                    </div>

                    <div class="cc-caption center max-width-400">
                        <h2 class="cc-title">Afternoon Photoshoot</h2>
                        <div class="cc-category"><span>Outdoor</span></div>
                    </div>

                </a>


                <a href="#" class="cc-item">

                    <div class="cc-image full-cover bg-image"
                        style="background-image: url(assets/img/gallery/gallery-list/auto-width/gallery-auto-width-8.jpg);">
                    </div>

                    <div class="cc-caption center max-width-400">
                        <h2 class="cc-title">Black &amp; White</h2>
                        <div class="cc-category"><span>Models</span></div>
                    </div>

                </a>


                <a href="#" class="cc-item">

                    <div class="cc-image full-cover bg-image"
                        style="background-image: url(assets/img/gallery/gallery-list/auto-width/gallery-auto-width-9.jpg);">
                    </div>

                    <div class="cc-caption center max-width-400">
                        <h2 class="cc-title">One Day Shoot With Ordinary People</h2>
                        <div class="cc-category"><span>People</span></div>
                    </div>

                </a>


                <a href="#" class="cc-item">

                    <div class="cc-image full-cover bg-image"
                        style="background-image: url(assets/img/gallery/gallery-list/auto-width/gallery-auto-width-10.jpg);">
                    </div>

                    <div class="cc-caption center max-width-400">
                        <h2 class="cc-title">Dancing Is Everything</h2>
                        <div class="cc-category"><span>People</span></div>
                    </div>

                </a>


                <a href="#" class="cc-item">

                    <div class="cc-image full-cover bg-image"
                        style="background-image: url(assets/img/gallery/gallery-list/auto-width/gallery-auto-width-11.jpg);">
                    </div>

                    <div class="cc-caption center max-width-400">
                        <h2 class="cc-title">Redhead Beauty</h2>
                        <div class="cc-category"><span>Nature</span></div>
                    </div>

                </a>


                <a href="#" class="cc-item">

                    <div class="cc-image full-cover bg-image"
                        style="background-image: url(assets/img/gallery/gallery-list/auto-width/gallery-auto-width-12.jpg);">
                    </div>

                    <div class="cc-caption center max-width-400">
                        <h2 class="cc-title">Beautiful People</h2>
                        <div class="cc-category"><span>Nature</span></div>
                    </div>

                </a>

            </div>

        </div>

    </div>
</section>

@endsection
