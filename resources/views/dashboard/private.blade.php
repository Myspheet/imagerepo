@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">My Private Album</h6>
                </div>
                {{-- <div class="pull-right">
                    <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-rounded btn-warning">Edit Project</a>
                    <a href="{{ route('admin.images.create', $project->slug) }}" class="btn btn-rounded btn-info">Add Images</a>
                    <a class="btn btn-rounded btn-danger">Delete Project</a>
                </div> --}}
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="gallery-wrap">
                        <div class="portfolio-wrap project-gallery">
                            <ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4">
                                @foreach ($images as $index => $image)
                                    <li class="item" data-src="/dashboard/images/{{ $image->image }}"
                                        data-sub-html="<a href='{{ route('dashboard.images.delete', $image->id) }}' id='delete{{$image->id}}'
                                            style='color:red; font-size:2em'>Delete Picture</a>">

                                        <a href="#">
                                            <img class="img-responsive" src="/dashboard/images/{{ $image->image }}" alt="Image description" />
                                            <span class="hover-cap"> Photo {{ $index + 1 }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <!-- Gallery JavaScript -->
	<script src="{{asset('dist/js/isotope.js')}}"></script>
	<script src="{{asset('dist/js/lightgallery-all.js')}}"></script>
	<script src="{{asset('dist/js/froogaloop2.min.js')}}"></script>
	<script src="{{asset('dist/js/gallery-data.js')}}"></script>
@endsection
