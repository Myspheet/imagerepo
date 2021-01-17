@extends('layouts.dashboard')

@section('content')

<!-- Bordered Table -->
<form action="{{ route('dashboard.images.delete') }}" method="POST">
    <div class="col-sm-12 col-md-10">
        <div class="panel panel-default border-panel card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Delete Images</h6>

                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    @endif
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <button type="submit" class="btn btn-danger">Delete Images</button>

                    <div class="table-wrap mt-40">
                            @csrf
                            @method('DELETE')
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Public</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($images as $id => $image)
                                            <tr>
                                                <td><input type="checkbox" name="delete[]" value="{{$image->id}}"></td>
                                                <td>{{$id + 1}}</td>
                                                <td>
                                                    @if ($image->public)
                                                        <img src="{{ asset('storage/'.$image->image) }}" class="img-responsive" width="90px" alt="">
                                                    @else
                                                        <img src="/dashboard/images/{{ $image->image }}" class="img-responsive" width="90px" alt="">
                                                    @endif
                                                </td>
                                                <td>{{$image->public ? 'True' : 'False'}}</td>
                                                <td>{{$image->created_at->format('d M y')}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$images->links()}}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- /Bordered Table -->

@endsection
