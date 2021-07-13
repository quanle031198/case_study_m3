@extends('backend.layouts.home')
@section('title', 'Product line edit')
@section('content')



    <div class="main-card mb-3 card">
        <div class="card-body">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
            @if (Session::has('error'))
                <p class="text-danger">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    {{ Session::get('error') }}
                </p>
            @endif
            <h5 class="card-title">@yield('title')</h5>
            {{-- <div class="error-message">
                @if ($errors->any())
                    @foreach($errors->all() as $nameError)
                        
                        <div class=" alert alert-danger">
                            <strong>{{ $nameError }}</strong>
                          </div>
                    @endforeach
                @endif
            </div> --}}
            <form method="POST" action="{{ route('product-line.update',$productline->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-5">
                        <div class="position-relative form-group">
                            <div class="col-sm-10">
                                    <div class="avatar-edit">
                                        <input name="productline_img" type='file' id="up_img"/>
                                        <label class="fa fa-upload lb-up" for="up_img"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url({{ asset('storage/' . $productline->productline_img) }});">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5">
                                
                                <div class="position-relative form-group">
                                    <div class="col-sm-10">
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-danger"
                                            onclick="history.go(-1); return false;">Cancel</button>
                                        <button type="submit" class="mb-2 mr-2 btn btn-primary">Edit</button>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="position-relative form-group">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" id="name" value="{{ $productline->name }}" placeholder="name" type="text"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="position-relative form-group">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="ckeditor form-control"  name="description" id="description">{!! $productline->description !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
    
   
    
@endsection
