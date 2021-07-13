@extends('backend.layouts.home')
@section('title', 'Product create')
@section('content')



    <div class="main-card mb-3 card">
        <div class="card-body">
           
            <h5 class="card-title">@yield('title')</h5>
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
            <form class="" method="POST" action="{{ route('product.store') }}" >
                @csrf
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="name"
                            class="">Name</label><input name="name" id="name"
                            placeholder="with a placeholder" type="text" class="form-control"
                            value="">
                        

                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="product_vendor"
                            class="">Product vendor</label><input name="product_vendor" id="product_vendor"
                            placeholder="with a placeholder" type="text" class="form-control"
                            value="">
                        

                    </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="quantity_stock"
                                class="">Quantity stock</label><input name="quantity_stock" id="quantity_stock" type="number"
                                class="form-control" value="">
                            

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="price"
                                class="">Price</label><input name="price" id="price" type="number"
                                class="form-control" value="">
                            

                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="exampleCity"
                                class="">Product line</label>
                            <select class="form-control" name="productline_id" id="productline_id">
                                @foreach ($productlines as $productline)
                                    <option value="{{ $productline->id }}">{{ $productline->name }}</option>
                                @endforeach
                                
                            </select>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="image_id"
                                class="">Album image</label>
                                <select class="form-control" name="image_id" id="image_id">
                                    @foreach ($albumImages as $albumImage)
                                        <option value="{{ $albumImage->id }}">{{ $albumImage->album_name }}</option>
                                    @endforeach
                                    
                                </select>

                        </div>
                    </div>

                </div>
                <div class="position-relative form-group">
                    <label for="product_description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="ckeditor form-control" name="product_description" id="product_description"></textarea>
                    </div>
                </div>
                
                <div class="position-relative form-group">
                    <div class="col-sm-10">
                        <button class="mb-2 mr-2 btn-transition btn btn-outline-danger"
                            onclick="history.go(-1); return false;">Cancel</button>
                        <button type="submit" class="mb-2 mr-2 btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
    </div>
    </div>
    
   
    
@endsection
