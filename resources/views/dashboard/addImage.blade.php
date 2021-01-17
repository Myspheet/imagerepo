@extends('layouts.dashboard')

@section('css')
    <!-- Bootstrap Dropzone CSS -->
    <link href="{{asset('vendors/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default border-panel card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Upload {{ucfirst($type)}} Image(s)</h6>
                </div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="">
                        <form action="{{ route('dashboard.images.store') }}" method="POST"
                            enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
                            @csrf
                            <input type="text" name="type" value="{{$type}}" hidden>
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
@endsection

@section('js')

    <!-- Dropzone JavaScript -->
    <script src="{{asset('vendors/bower_components/dropzone/dist/dropzone.js')}}"></script>

    <!-- Dropzone Init JavaScript -->
    <script src="{{asset('dist/js/dropzone-data.js')}}"></script>

@endsection
