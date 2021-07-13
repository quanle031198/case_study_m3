@extends('backend.layouts.home')
@section('title', 'Product edit')
@section('content')



    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">@yield('title')</h5>
            <form method="POST" action="{{ route('product.update', $product->id) }}">
                @csrf
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="name" class="">Name</label><input name="name"
                                id="name" placeholder="with a placeholder" type="text" class="form-control" value="{{ $product->name }}">


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="product_vendor" class="">Product
                                vendor</label><input name="product_vendor" id="product_vendor"
                                placeholder="with a placeholder" type="text" class="form-control" value="{{ $product->product_vendor }}">


                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="quantity_stock" class="">Quantity
                                stock</label><input name="quantity_stock" id="quantity_stock" type="number"
                                class="form-control" value="{{ $product->quantity_stock }}">


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="price" class="">Price</label><input
                                name="price" id="price" type="number" class="form-control" value="{{ $product->price }}">


                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="exampleCity" class="">Product line</label>
                            <select class="form-control" name="productline_id" id="productline_id">
                                @foreach ($productlines as $productline)
                                <option @if ($product->productline_id == $productline->id) {{ 'selected' }} @endif
                                    value="{{ $productline->id }}">{{ $productline->name }}</option>
                            @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group"><label for="image_id" class="">Album image</label>
                            <select class="form-control" name="image_id" id="image_id">
                                @foreach ($albumImages as $albumImage)
                                <option @if ($product->image_id == $albumImage->id) {{ 'selected' }} @endif
                                    value="{{ $albumImage->id }}">{{ $albumImage->album_name }}</option>
                            @endforeach
                            </select>

                        </div>
                    </div>

                </div>
                <div class="position-relative form-group">
                    <label for="product_description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="ckeditor form-control" name="product_description"
                            id="product_description">{!! $product->product_description !!}</textarea>
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
