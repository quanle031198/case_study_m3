@extends('backend.layouts.home')
@section('title', 'Create new album')
@section('content')



    <div class="main-card mb-3 card">
        <div class="card-body">

            <h5 class="card-title">@yield('title')</h5>
      
            <form method="POST" action="{{ route('product-image.update', $image->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-5">
                        <div class="position-relative form-group">
                            <div class="col-sm-10">

                                <div class="position-relative form-group">
                                    <label for="name" class="col-sm-4 col-form-label">Name album</label>
                                    <div class="col-sm-10">
                                        <input name="album_name" value="{{ $image->album_name }}" id="name"
                                            placeholder="album name" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative form-group">
                            <div class="col-md-6">

                                <div class="position-relative form-group">
                                    <div class="col-sm-10">
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-danger"
                                            onclick="history.go(-1); return false;">Cancel</button>
                                        <button type="submit" class="mb-2 mr-2 btn btn-primary">Update</button>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-row">
                            <div class="col-md-5">
                                <div class="position-relative form-group">

                                    <label for="input-file-now-custom-1">image 1</label>
                                    <input type="file" id="input-file-now-custom-1" name="image_a" class="dropify"
                                        data-default-file="{{$image->image_a }}" />
                                </div>

                                <div class="position-relative form-group">

                                    <label for="input-file-now-custom-1">image 2</label>
                                    <input type="file" id="input-file-now-custom-1" name="image_b" class="dropify"
                                        data-default-file="{{$image->image_b }}" />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="position-relative form-group">

                                    <label for="input-file-now-custom-1">image 3</label>
                                    <input type="file" id="input-file-now-custom-1" name="image_c" class="dropify"
                                        data-default-file="{{$image->image_c }}" />
                                </div>

                                <div class="position-relative form-group">

                                    <label for="input-file-now-custom-1">image 4</label>
                                    <input type="file" id="input-file-now-custom-1" name="image_d" class="dropify"
                                        data-default-file="{{$image->image_d }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
        </form>
    </div>
    </div>



@endsection
