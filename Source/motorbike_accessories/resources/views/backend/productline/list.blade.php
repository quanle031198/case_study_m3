@extends('backend.layouts.home')
{{-- @section('title', __('language.title_head')) --}}
@section('title', 'Product line list')

@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="form-row">
                <div class="col">
                    <h5 class="card-title">@yield('title')</h5>
                </div>
            </div>
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
            <div style="margin-bottom: 40px">
            <ul class="header-menu nav float-left">
            {{-- <form action="{{ route('product.filter') }}" method="get">
                @csrf

                <select class="custom-select w-100" name="category_id">
                    <option value="">Chooose Category</option>
                    @foreach ($categories as $category)
                        @if (isset($categoryFilter))
                            @if ($category->id == $categoryFilter->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}
                                </option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            
            </form> --}}
            </ul>

            <ul class="header-menu nav float-right">
                <form class="" method="GET" action="{{ route('product-line.search') }}">
                    @csrf
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <div class="input-group"><input name="keyword" value="" type="text" class="form-control">
                                <div class="input-group-append">
                                    <button type="submitAjax" class="btn btn-outline-info"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </ul>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                {{-- <th>{!! __('language.Stt') !!}</th>
                                <th>{!! __('language.title') !!}</th>

                                <th>{!! __('language.img') !!}</th>
                                <th>{!! __('language.category') !!}</th>
                                <th>{!! __('language.tool') !!}</th> --}}
                                <th>STT</th>
                                <th>Product line</th>

                                <th>Image</th>
                                <th>Description</th>
                                <th>Tool</th>

                            

                            </tr>
                        </thead>
                        <tbody>
                            @if (count($productlines) == 0)
                                <tr>
                                    <td colspan="4">Empty data !</td>
                                </tr>
                            @else
                                @foreach ($productlines as $key => $productline)
                                    <tr>
                                        <th>{{ ++$key }}</th>
                                        {{-- <td><a href="{{ route('product.detail', $product->id) }} "
                                                class="nav-link">{{ $product->name }}</a></td> --}}
                                                <td>{{ $productline->name }}</td>
                                        <td>
                                            @if ($productline->productline_img)
                                                <img src="{{ asset('storage/' . $productline->productline_img ) }}" alt=""
                                                    style="width: 130px; height: 130px">
                                            @else
                                                {{ 'Not image !' }}
                                            @endif
                                            
                                        </td>
                                        <td>{!! $productline->description !!}</td>
                    
                                    

                                        <td>
                                             <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product-line.edit', $productline->id) }}"> <i class="pe-7s-file"></i>
                                                Edit</a>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product-line.delete', $productline->id) }}"><i
                                                    class=" pe-7s-trash "></i>
                                                    Delete</a> 
                                                    {{-- <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product.edit', $product->id) }}"> <i class="pe-7s-file"></i>
                                                Edit</a>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product.delete', $product->id) }}"><i
                                                    class=" pe-7s-trash "></i>
                                                    Delete</a> --}}
                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body">
                <nav class="d-flex justify-content-center" aria-label="Page navigation example ">
                    <ul class="pagination">
                        {!! $productlines->links('pagination::bootstrap-4') !!}
                    </ul>
                </nav>
            </div>

        </div>
    </div>

@endsection
