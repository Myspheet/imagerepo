@extends('layouts.main')

@section('content')

<section id="tt-intro" class="gallery-list-carousel slideshow-intro">
    <div class="tt-intro-inner tt-wrap">
      <div class="gl-carousel-wrap no-padding">
        <div class="owl-carousel cc-height-full cursor-grab bg-dark" data-xl-items="1" data-loop="true"
          data-autoplay="true" data-autoplay-timeout="8000" data-nav="true" data-animation-in="fadeIn"
          data-animation-out="fadeOut">

          <div class="cc-item">

            <span class="cover bg-transparent-4-dark"></span>

            <div class="cc-image bg-image"
              style="background-image: url({{asset('assets/img/intro/intro-6.jpg')}}); background-position: 50% 50%;"></div>

            <div class="intro-caption caption-animate intro-caption-xxlg center">
              {{-- <h1 class="intro-title">Photo Studio</h1> --}}
              <h2 class="intro-subtitle">Find Inspiration</h2>
              <p class="intro-description max-width-650">
                Find inspiration for your pictures from our <br>
                collection of public images
              </p>
              <div class="margin-top-30">
                <a href="{{route('gallery')}}" class="btn btn-white-bordered margin-top-5">View More</a>
              </div>
            </div>

          </div>


          <div class="cc-item">

            <span class="cover bg-transparent-4-dark"></span>

            <div class="cc-image bg-image"
              style="background-image: url({{asset('assets/img/intro/intro-7.jpg')}}); background-position: 50% 50%;"></div>

            <div class="intro-caption caption-animate intro-caption-xxlg center">
              {{-- <h1 class="intro-title">Creative</h1> --}}
              <h2 class="intro-subtitle">Share your Photos with the World</h2>
              <p class="intro-description max-width-650">
                Share your photos with the world. <br>
                As well have a private repo to store your photos.
              </p>
              <div class="margin-top-30">
                <a href="{{route('gallery')}}" class="btn btn-white-bordered margin-top-5">View More</a>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>

@endsection
