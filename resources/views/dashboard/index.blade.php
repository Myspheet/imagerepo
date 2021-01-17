@extends('layouts.dashboard')

@section('content')

<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            {{-- <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">With Filter</h6>
                </div>
                <div class="clearfix"></div>
            </div> --}}
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="filter-wrap mb-40">
                        <!-- Portfolio Filters -->
                        <ul id="filters" class="col-md-5">
                            <li><a id="all" href="#" data-filter="*" class="active">all</a></li>
                            <li><a href="#" data-filter=".public">public</a></li>
                            <li><a href="#" data-filter=".private">private</a></li>
                        </ul>
                        <!--/Portfolio Filters -->
                        <div class="clearfix"></div>
                    </div>

                    <div class="gallery-wrap">

                        <div class="portfolio-wrap project-gallery">
                            <ul id="portfolio" class="portf auto-construct  project-gallery" data-col="3">
                                @foreach ($images as $index => $image)
                                    @if (!$image->public)

                                        <li class="item private" data-src="/dashboard/images/{{ $image->image }}"
                                            data-sub-html="<p>Photo {{ $index + 1 }}</p>">

                                            <a href="#">
                                                <img class="img-responsive" src="/dashboard/images/{{ $image->image }}" alt="Image description" />
                                                <span class="hover-cap"> Photo {{ $index + 1 }}</span>
                                            </a>
                                        </li>

                                    @else

                                        <li class="item public" data-src="{{asset('storage/'.$image->image)}}"
                                            data-sub-html="<p>Photo {{ $index + 1 }}</p>">

                                            <a href="#">
                                                <img class="img-responsive" src="{{asset('storage/'.$image->image)}}" alt="Image description" />
                                                <span class="hover-cap"> Photo {{ $index + 1 }}</span>
                                            </a>
                                        </li>

                                    @endif

                                @endforeach

                            </ul>
                            <!-- Hidden video div -->
                            <div style="display:none;" id="video1">
                                <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                                    <source src="https://hencework.com/theme/admintres/videos/video1.mp4" type="video/webm">
                                    <source src="https://hencework.com/theme/admintres/videos/video1.webm" type="video/webm">
                                    Your browser does not support HTML5 video.
                                </video>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->

@endsection

@section('js')
    <!-- Gallery JavaScript -->
	<script src="{{asset('dist/js/isotope.js')}}"></script>
	<script src="{{asset('dist/js/lightgallery-all.js')}}"></script>
	<script src="{{asset('dist/js/froogaloop2.min.js')}}"></script>
	<script src="{{asset('dist/js/gallery-data.js')}}"></script>
@endsection
