@extends('backend.layouts.home')
{{-- @section('title', __('language.title_head')) --}}
@section('title', 'Product Detail')

@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="form-row">
                <div class="col">
                    <h5 class="card-title">@yield('title')</h5>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name Product</th>

                            <th>Product vendor</th>
                            <th>Product line</th>
                            <th>Quantity</th>
                            <th>Price</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th>{{ $product->id }}</th>

                            <td>{{ $product->name }}</td>
                            <td>

                                {{ $product->product_vendor }}
                            </td>
                            <td>{{ $product->productline->name }}</td>
                            <td>{{ $product->quantity_stock }}</td>

                            <td>{{ $product->price }}</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{!! $product->product_description !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name Album</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Image 3</th>
                            <th>Image 4</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th class="text-primary">{{ $product->image->album_name }}</th>

                            <td>

                                <div style="width: 50%">
                                    <img width="100%" src="{{ asset('storage/' . $product->image->image_a) }}" />


                                </div>
                            </td>

                            <td>

                                <div style="width: 50%">
                                    <img width="100%" src="{{ asset('storage/' . $product->image->image_b) }}" />


                                </div>
                            </td>
                            <td>
                                <div style="width: 50%">
                                    <img width="100%" src="{{ asset('storage/' . $product->image->image_c) }}" />


                                </div>
                            </td>
                            <td>
                                <div style="width: 50%">
                                    <img width="100%" src="{{ asset('storage/' . $product->image->image_d) }}" />


                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
